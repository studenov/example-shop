<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
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
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'is_admin' => 1,
            ],
            [
                'name' => 'Jack',
                'email' => 'jack123@example.com',
                'password' => bcrypt('password'),
                'is_admin' => 0,
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@example.com',
                'password' => bcrypt('password'),
                'is_admin' => 0,
            ],
        ]);
    }
}
