<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new product();
         $product->name       = "aaaa";
         $product->description       = "aaaa";
         $product->price   = 23.2;

         $product->save();

         $product1 = new product();
         $product1->name       = "sssss";
         $product1->description       = "sssss";
         $product1->price   = 23.2;


         $product1->save();

         $product2 = new product();
         $product2->name       = "vvvvv";
         $product2->description       = "vvvvv";
         $product2->price   = 23.2;


         $product2->save();

         $product3 = new product();
         $product3->name       = "121212";
         $product3->description       = "121111212";
         $product3->price   = 23.2;


         $product3->save();
    }
}
