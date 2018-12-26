<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'Vinh',
            'email' => 'vinhxk199x@gmail.com',
            'password' => bcrypt('123456'),
            'created_at'
            => new DateTime,
            'updated_at'
            => new DateTime,
            ],
            [
            'name' => 'David',
            'email' =>  'nguyenvanvinhxk1997@gmail.com',
            'password' => bcrypt('yourPassword'),
            'created_at'
            => new DateTime,
            'updated_at'
            => new DateTime,
            ],
        ]);
        DB::table('roles')->insert([
            [
            'name' => 'manager',
            'guard_name' => 'web',
            'created_at'
            => new DateTime,
            'updated_at'
            => new DateTime,
            ],
        ]);
        DB::table('model_has_roles')->insert([
            [
            'role_id' => '1',
            'model_type' => 'App\User',
            'model_id' => '1',
            ],
        ]);
    }
}
