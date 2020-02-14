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
            'name'=>'Admin User',
            'email'=>'admin@admin.com',
            'password'=> Hash::make('admin')
        ]);

        $author = User::create([
            'name'=>'cliente User',
            'email'=>'author@author.com',
            'password'=> Hash::make('cliente')
        ]);

        $user = User::create([
            'name'=>'users User',
            'email'=>'user@user.com',
            'password'=> Hash::make('user')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($adminRole);
        $user->roles()->attach($adminRole);
    }
}
