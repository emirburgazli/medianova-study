<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run(Faker\Generator $faker)
    {
        for ($i=1;$i<=30;$i++) {
            DB::table('products')->insert([
               'product_name' => $faker->name,
               'description' => 'Description '. $i,
               'price' => random_int(10,300),
                'category_id' => random_int(1,2)
            ]);
        }
    }
}

