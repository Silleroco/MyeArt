<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\Seller;
use App\Models\User;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var object Busca el rol de vendedor del sistema */
        $sellerRole = Role::where('name', 'seller')->first();
        foreach (User::all() as $user) {
            //if (rand(0, 1) == 1) {
                Seller::factory()->create(['user_id' => $user->id]);
                /** Asigna el rol de Vendedor */
                if ($sellerRole) {
                    $user->assignRole($sellerRole);
                }
            //}
        }
    }
}
