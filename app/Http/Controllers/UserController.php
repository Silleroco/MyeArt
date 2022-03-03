<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Laravel\Cashier\Cashier;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;
use App\Models\Tag;
use App\Models\Seller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::role(['buyer', 'seller'])->where('id', '<>', auth()->user()->id)->get();
        //excluimos si tiene rol admin
        // $users = $users->reject(function ($user, $key) {
        //             return $user->hasRole('admin');
        // });
        //dd($users);
        return Inertia::render('dashboard/users/Index', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Inertia::render('dashboard/users/Show', [
            'user' => User::where('id', $id)->with(['profile', 'roles'])->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->with(['profile', 'roles'])->first();

        // dd($user);

        // return Inertia::render('users/AccountInformation', [
        //     'user' => $user,
        //     'tags' => $tags
        // ]);

        return Inertia::render('dashboard/users/Edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());

        $user = User::find($id);

        $user->update($request->all());
        $user->profile->update($request->all());

        if ($request->file('avatar')) {
            $this->deleteAvatar($user->profile->avatar);
            $user->profile->update($request->all());
            $newPath = $this->saveAvatar($request);
            $user->profile->update(['avatar' => $newPath]);
        }

        return back()->with('user', $user);
        // return back()->json(['success' => 'Datos actualizados']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $this->deleteAvatar($user->profile->avatar);
        $user->delete();
        return back();
        //return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editAccountInformation()
    {
        $tags = Tag::all();
        $seller = Seller::where('user_id', auth()->user()->id)
            ->with('tags')
            ->first();

        // dd($seller);

        // En la vista se se toma la variable del usuario autenticado
        return Inertia::render('users/AccountInformation', [
            'tags' => $tags,
            'seller' => $seller,
            'user' => auth()->user(),
            'intent' => auth()->user()->createSetupIntent(),
        ]);
    }

    /**
     * Muestra la vista de las compras del usuario autenticado.
     *
     */
    public function myShopping()
    {
        $buys = auth()->user()->buys;

        return Inertia::render('Account/MyShopping', [
            'buys' => $buys
        ]);
    }


    public function saveAvatar(Request $request)
    {
        $id = auth()->user()->id;

        $originalImage = $request->file('avatar');
        $image = Image::make($originalImage);
        $folderAvatars = 'avatars';
        $originalPath = public_path($folderAvatars);

        // Nombre aleatorio para la image
        $tempName = 'avatar-'.$id. '.' . $originalImage->getClientOriginalExtension();

        // Redimensinoar la imagen
        if ($image->width() >= $image->height()) {
            $image->heighten(400);
        } else {
            $image->widen(400);
        }

        $image->resizeCanvas(400, 400);

        $path = '/'.$folderAvatars.'/'.$tempName;
        $image->save($originalPath.'/'.$tempName);

        return $path;
    }

    public function deleteAvatar($avatar)
    {
        $originalPath = public_path('avatars');

        if ($avatar != 'default.jpg') {
            if (\File::exists($originalPath.'/'.$avatar)) {
                \File::delete($originalPath.'/'.$avatar);
            }
        }
    }
}
