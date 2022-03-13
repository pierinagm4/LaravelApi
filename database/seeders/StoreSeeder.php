<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\store;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
         $store = new store();
         $store->name       = "xxx";
         $store->city       = "xxx";
         $store->address   = "xxx";

         $store->save();

         $store1 = new store();
         $store1->name       = "xxxx";
         $store1->city       = "xxxx";
         $store1->address   = "xxxx";

         $store1->save();

         $store1 = new store();
         $store1->name       = "xxxxx";
         $store1->city       = "xxxxx";
         $store1->address   = "xxxxx";

         $store->save();

         $store = new store();
         $store->name       = "xxxxxxx";
         $store->city       = "xxxxxxx";
         $store->address   = "xxxxxxx";

         $store->save();

    }
}
