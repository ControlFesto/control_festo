<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role; // Importa la clase Role
use Spatie\Permission\Models\Permission; // Importa la clase Permission
use App\Models\User;

//Seeder para usuarios por defecto
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);

        // Obtener los roles
        $instructorRole = Role::where('name', 'Instructor')->first();
        $cuentadanteRole = Role::where('name', 'Cuentadante')->first();
        $monitorRole = Role::where('name', 'Monitor')->first();

        // Crear usuarios y asignarles roles
        $user1 = User::firstOrCreate([
            'name' => 'Instructor',
            'lastname' => 'Sena',
            'email' => 'instructorexample@gmail.com',
            'user_identity' => '1000456',
            'telefono' => '3000000000',
            'user_estado' => 'activo' 
        ]);
        $user1->assignRole($instructorRole);

        $user2 = User::firstOrCreate([
            'name' => 'Cuentadante',
            'lastname' => 'Sena',
            'email' => 'cuentadanteexample@gmail.com',
            'user_identity' => '1000045',
            'telefono' => '300000009',
            'user_estado' => 'activo'  
        ]);
        $user2->assignRole($cuentadanteRole);

        $user3 = User::firstOrCreate([
            'name' => 'Monitor',
            'lastname' => 'Sena',
            'email' => 'monitorexample@gmail.com',
            'user_identity' => '10040000',
            'telefono' => '30000001',
            'user_estado' => 'activo'  
        ]);
        $user3->assignRole($monitorRole);
    }
}
