<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([[
            'name'=>'Lg Mobile',
            'price'=>'10000',
            'description'=>'A smart Phone',
            'category'=>'mobile',
            'gallery'=>"https://image.shutterstock.com/image-photo/funny-red-squirrell-standing-forest-260nw-1514116085.jpg"
        ],
        [
            'name'=>'Lg Mobile2',
            'price'=>'12000',
            'description'=>'A smart Phone',
            'category'=>'mobile',
            'gallery'=>"https://image.shutterstock.com/image-photo/red-fox-jump-hunting-vulpes-260nw-1490038493.jpg"
        ],
        [
            'name'=>'Lg Mobile3',
            'price'=>'10000',
            'description'=>'A smart Phone',
            'category'=>'mobile',
            'gallery'=>"https://gratisography.com/wp-content/uploads/2019/02/gratisography-tall-tree-barren-800x525.jpg"
        ],
        [
            'name'=>'Lg Mobile4',
            'price'=>'10000',
            'description'=>'A smart Phone',
            'category'=>'mobile',
            'gallery'=>"https://image.shutterstock.com/image-photo/funny-red-squirrell-standing-forest-260nw-1514116085.jpg"
            ]
            
            ]);
    }
}
