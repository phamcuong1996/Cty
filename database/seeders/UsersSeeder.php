<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            [
                'name' => 'Cuong',
                'username' => 'cuong1996',
                'password' => '123456',
            ],
            [
                'name' => 'Cuong',
                'username' => 'cuong1996',
                'password' => '123456',
            ],
            [
                'name' => 'Cuong',
                'username' => 'cuong1996',
                'password' => '123456',
            ],
            [
                'name' => 'Cuong',
                'username' => 'cuong1996',
                'password' => '123456',
            ],
            [
                'name' => 'Cuong',
                'username' => 'cuong1996',
                'password' => '123456',
            ],
            [
                'name' => 'Cuong',
                'username' => 'cuong1996',
                'password' => '123456',
            ],
            [
                'name' => 'Cuong',
                'username' => 'cuong1996',
                'password' => '123456',
            ],
            [
                'name' => 'Cuong',
                'username' => 'cuong1996',
                'password' => '123456',
            ],
            [
                'name' => 'Cuong',
                'username' => 'cuong1996',
                'password' => '123456',
            ],
            [
                'name' => 'Cuong',
                'username' => 'cuong1996',
                'password' => '123456',
            ],
            [
                'name' => 'Cuong',
                'username' => 'cuong1996',
                'password' => '123456',
            ],
        ], );
    }
}