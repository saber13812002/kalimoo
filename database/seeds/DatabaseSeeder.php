<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\MainCategory::class , 5)->create();
        factory(\App\SecondaryCategory::class , 10)->create();
        factory(\App\ThirdCategory::class , 10)->create();
        factory(\App\Product::class , 250)->create();
        factory(\App\User::class , 10)->create();
//        factory(\App\Order::class , 10)->create();
        factory(\App\Brand::class , 10)->create();
    }
}
