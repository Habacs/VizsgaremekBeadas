<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('products')->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Product::insert([
            [
                'name' => 'Sport cipő iskolás gyereknek',
                'description' => 'A mozgás öröme mindenkit megillet.',
                'image' => '/storage/images/cipo1.jpg', 
                'goal_amount' => 12000,
                'collected_amount' => 4100,
            ],
            [
                'name' => 'Téli kabát kisgyermekeknek',
                'description' => 'Védelem és meleg télen is.',
                'image' => '/storage/images/kabat1.jpg',
                'goal_amount' => 15000,
                'collected_amount' => 8000,
            ],
            [
                'name' => 'Futóruha lányoknak',
                'description' => 'Kényelmes és rugalmas sportöltözet.',
                'image' => '/storage/images/futoruha.jpg',
                'goal_amount' => 10000,
                'collected_amount' => 2500,
            ],
        ]);
    }
}
