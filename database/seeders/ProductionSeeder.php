<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productions')->insert([
            [
            'name' => 'Cuong',
            'description' => 'cuong1996',
            'image' => '123456',
            'price' => '123456',
            'manufacturing_company' => '123456',
            ],
            [
            'name' => 'Cuong1',
            'description' => 'cuong19961',
            'image' => '1234561',
            'price' => '123456',
            'manufacturing_company' => '1234561',
            ],
        ]);
        
    }
}
