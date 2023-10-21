<?php

namespace Database\Seeders;


use App\Models\gig;
use Illuminate\Database\Seeder;

class GigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        gig::create(
            [
            'user_id' => 1,
            'product_name' => "Nike Air",
            'size' => '9(M)',
            'price' => 2500,
            'product_type' => "Sneaker",
            'condition' => "9/10",
            'img' => '1.png'
            ]
            );
    }
}
