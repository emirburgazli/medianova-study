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
        DB::table('category')->insert(['name'=>"kozmatik"]);
        DB::table('category')->insert(['name'=>"gıda"]);
    }
}
