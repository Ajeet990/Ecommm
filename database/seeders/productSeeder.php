<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name'=>'Boat neckband',
            'price'=>'2000',
            'category'=>'Earphones',
            'description'=>'The best music earphone with 40 hours of battery',
            'gallery'=>'https://m.media-amazon.com/images/I/510gnVU7ccL._AC_UY218_.jpg'],

            ['name'=>'Ear Rings',
            'price'=>'1000',
            'category'=>'Decoration',
            'description'=>'Beautiful Earings',
            'gallery'=>'https://m.media-amazon.com/images/I/91AFDU6ehGS._AC_UL320_.jpg'],

            ['name'=>'MI power bank',
            'price'=>'1700',
            'category'=>'Battery',
            'description'=>'Power bank with 20000MAh. That can charge your phone 5 times with a full charge',
            'gallery'=>'https://m.media-amazon.com/images/I/71lVwl3q-kL._AC_UY218_.jpg'],

            ['name'=>'VILLS LAURRENS',
            'price'=>'1999',
            'category'=>'Watch',
            'description'=>'The best Washing machine',
            'gallery'=>'https://m.media-amazon.com/images/I/4171lqrPgFL._AC_UL320_.jpg']


        ]);
    }
}
