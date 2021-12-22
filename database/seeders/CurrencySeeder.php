<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            [
                'code' => 'UAH',
                'symbol' => '₴',
                'is_main' => 1,
                'rate' => 1,
            ],
            [
                'code' => 'USD',
                'symbol' => '$',
                'is_main' => 26,
                'rate' => 0,
            ],
            [
                'code' => 'EUR',
                'symbol' => '€',
                'is_main' => 30,
                'rate' => 0,
            ],
        ]);
    }
}
