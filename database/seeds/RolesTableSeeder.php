<?php

use Illuminate\Database\Seeder;
use App\Modelo\admin\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'author']);
        Role::create(['name'=>'user']);
    }
}
