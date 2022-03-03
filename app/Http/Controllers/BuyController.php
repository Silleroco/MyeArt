<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Artwork;
use Inertia\Inertia;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $artwork = Artwork::where('id', $id)->with('artworkImages')->first();
        $discount_rate = 10;

        $amount = $artwork->offer ? $artwork->offer : $artwork->price;

        $total_amount = $amount + ($amount * $discount_rate)/100;

        return Inertia::render('buys/BuysIndex', [
            "artwork" => $artwork,
            "discount_rate" => $discount_rate,
            "total_amount" => $total_amount
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //$user = auth()->user();

        $user = User::firstOrCreate(
            [
                'email' => $request->email
            ],
            [
                'password' => Hash::make(Str::random(12)),
                'name' => $request->name.' '.$request->lastname,
            ]
        );

        try {
            $payment = $user->charge(
                $request->amount*100,
                $request->payment_method_id
            );

            $payment = $payment->asStripePaymentIntent();

            $artwork = Artwork::where('id', $request->artwork_id)->with('artworkImages')->first();

            $total = $artwork->offer ? $artwork->offer : $artwork->price;


            $buy = new Buy;
            //transaction_id es el id de la orden en stripe, eso al final
            $buy->transaction_id = $payment->charges->data[0]->id;
            $buy->user_id = $user->id;
            $buy->artwork_id = $request->artwork_id;
            $buy->name = $request->name;
            $buy->lastname = $request->lastname;
            $buy->country = $request->country;
            $buy->address = $request->address;
            $buy->zip_code = $request->zip_code;
            $buy->city = $request->city;
            $buy->region = $request->region;
            $buy->phone = $request->phone;
            $buy->email = $request->email;
            $buy->total = $total;
            $buy->save();

            $buy_details = [
                    'greeting' => 'Has realizado una compra en Myeart',
                    'body' => 'Tu compra de '.$artwork->name.' se ha realizado satisfactoriamente',
                    'url' => '/cuenta/mis-compras',
                    //'thanks' => 'Thank you for visiting codechief.org!',
            ];

            $user->notify(new \App\Notifications\NewBuy($buy_details));

            $seller = $artwork->seller->user;
            $sale_details = [
                    'greeting' => 'Han comprado una de tus obras de arte',
                    'body' => 'Su obra '.$artwork->name.' ha sido comprada por el usuario '.$user->profile->firstName.' '.$user->profile->lastName,
                    'url' => '/cuenta/mis-ventas',
                    //'thanks' => 'Thank you for visiting codechief.org!',
            ];

            $seller->notify(new \App\Notifications\NewSale($sale_details));

            $discount_rate = 10;

            $total_amount = $total + ($total * $discount_rate)/100;

            return Inertia::render('buys/PurchaseSummary', [
                'artwork' => $artwork,
                'buy' => $buy,
                'discount_rate' => $discount_rate,
                'total_amount' => $total_amount
            ]);

        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500 );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buy = Buy::find($id);
        $seller = Seller::query('id', $buy->artwork->seller->id)->with(['user', 'user.profile'])->first();
        $buyer = User::query('id', $buy->user->id)->with(['profile'])->first();

        return Inertia::render('vista donde se ve como va la compra', [
            'buy' => $buy
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buy = Buy::find($id);
        return Inertia::render('vista donde puede finalizar la obra si ya la obtuvo', [
            'buy' => $buy
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /**
        * Se actualiza el estatus de la compra
        * en este caso puede ser solo cambiar a estatus finished
        * si ya la recibio
        */

        $buy = Buy::find($id);
        $buy->comment = $request->comment;
        $buy->rating = $request->rating;
        $buy->finished = 1;
        $buy->save();


        // //Agregado para el pago!
        // $stripeCharge = $request->user()->charge(
        //     $buy->total, $request->paymentMethodId
        // );



        return back();

        // return response()->json(['success' => 'Compra finalizada']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buy $buy)
    {
        //
    }


    public function indexDashboard()
    {
        $buys = Buy::with([
            'artwork.seller.user',
            'user'
        ])->get();

        return Inertia::render('dashboard/transactions/Index', [
            'buys' => $buys
        ]);
    }
}
