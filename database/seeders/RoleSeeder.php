<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        /** @var array Listado de roles a registrar */
        $roles = [
            [
                'name' => 'admin'
            ],
            [
                'name' => 'operator'
            ],
            [
                'name' => 'buyer'
            ],
            [
                'name' => 'seller'
            ]
        ];

        DB::transaction(function () use ($roles) {
            foreach ($roles as $role) {
                Role::updateOrCreate(
                    ['name' => $role['name']]
                );
            }
        });
    }
}
