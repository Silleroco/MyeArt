<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {

            /** @var object Crea el usuario ADMIN por defecto de la aplicación */
            $userAdmin = User::updateOrCreate(
                ['email' => 'admin@admin.com'],
                [
                    'name' => 'Admin',
                    'password' => bcrypt('password'),
                    'email_verified_at' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );
            if (!$userAdmin) {
                throw new Exception('Error creando el usuario administrador por defecto');
            }

            /** @var object Busca el rol de administrador del sistema */
            $adminRole = Role::where('name', 'admin')->first();

            /** Asigna el rol de administrador */
            if ($adminRole) {
                $userAdmin->assignRole($adminRole);
            }

            /** @var object Crea el usuario OPERADOR por defecto de la aplicación */
            $userOperator = User::updateOrCreate(
                ['email' => 'operator@admin.com'],
                [
                    'name' => 'Operator',
                    'password' => bcrypt('password'),
                    'email_verified_at' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );
            if (!$userOperator) {
                throw new Exception('Error creando el usuario operador por defecto');
            }

            /** @var object Busca el rol de administrador del sistema */
            $operatorRole = Role::where('name', 'operator')->first();

            /** Asigna el rol de operador */
            if ($operatorRole) {
                $userOperator->assignRole($operatorRole);
            }
        });

        //Se eliminan las siguienteslineas en produccion
        // $users = User::factory()->count(12)->create();
        //
        // /** @var object Busca el rol de administrador del sistema */
        // $buyerRole = Role::where('name', 'buyer')->first();
        //
        // /** Asigna el rol de operador */
        // if ($buyerRole) {
        //     foreach ($users as $user) {
        //         // code...
        //         $user->assignRole($buyerRole);
        //     }
        // }
    }
}
