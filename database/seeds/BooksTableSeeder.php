<?php

use Illuminate\Database\Seeder;
use \App\Models\Books;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i <= 10; $i++) {
        DB::table('books')->insert([
            'BookName' => "Cin Ali ".$i,
            'ISBN' => random_int(100,999) ."-". random_int(100,999) ."-". random_int(100,999),
            'Price' => random_int(10,200),
            'PageCount' => random_int(40,500),
        ]);
        }
    }
}
