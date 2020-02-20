<?php
use Illuminate\Database\Seeder;
use App\Modelo\admin\User;
use App\Modelo\admin\Role;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        $adminRole = Role::where('name','admin')->first();
        $adminRole = Role::where('name','cliente')->first();
        $adminRole = Role::where('name','user')->first();

        $admin = User::create([
            'name'=>'Admin Usuario',
            'email'=>'admin@admin.com',
            'password'=> Hash::make('admin'),
            'telefono'=>'7711189852',
            'edad'=>'30',
            'genero'=>'Masculino'
        ]);

        $cliente = User::create([
            'name'=>'cliente User',
            'email'=>'cliente@cliente.com',
            'password'=> Hash::make('cliente'),
            'telefono'=>'7711189852',
            'edad'=>'30',
            'genero'=>'Masculino'
        ]);

        $user = User::create([
            'name'=>'users User',
            'email'=>'user@user.com',
            'password'=> Hash::make('user'),
            'telefono'=>'7711189852',
            'edad'=>'30',
            'genero'=>'Masculino'
        ]);

        $admin->roles()->attach($adminRole);
        $cliente->roles()->attach($adminRole);
        $user->roles()->attach($adminRole);
    }
}
