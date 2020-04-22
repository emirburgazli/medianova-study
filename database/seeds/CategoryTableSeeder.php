<?php

use Illuminate\Database\Seeder;
USE Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert(['name'=>"Kozmatik"]);
        DB::table('category')->insert(['name'=>"Gıda"]);
    }
}
