<?php

use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Product::class, 10)->create()->each(function ($product) {
            $product->movements()->save(factory(App\Models\ProductMovement::class)->make());
        });
     
    }
}
