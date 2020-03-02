<?php

use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodcuts = [
            ['name'=> 'Men T-Shirt', 'size' => 'small', 'color' => 'blue', 'brand' => 'Nike'],
            ['name'=> 'Men T-Shirt', 'size' => 'medium', 'color' => 'blue', 'brand' => 'Nike'],
            ['name'=> 'Men T-Shirt', 'size' => 'large', 'color' => 'blue', 'brand' => 'Nike'],
            ['name'=> 'Women T-Shirt', 'size' => 'large', 'color' => 'red', 'brand' => 'Nike'],
            ['name'=> 'Women T-Shirt', 'size' => 'medium', 'color' => 'red', 'brand' => 'Nike'],
            ['name'=> 'Women T-Shirt', 'size' => 'medium', 'color' => 'blue', 'brand' => 'Nike'],
            ['name'=> 'Men Double T-Shirt', 'size' => 'xl', 'color' => 'white', 'brand' => 'Adidas'],
            ['name'=> 'Men Double T-Shirt', 'size' => 'large', 'color' => 'white', 'brand' => 'Adidas'],
            ['name'=> 'Men Double T-Shirt', 'size' => 'large', 'color' => 'red', 'brand' => 'Adidas'],
            ['name'=> 'Leather Belt', 'size' => 'medium', 'color' => 'brown', 'brand' => 'HM'],
            ['name'=> 'Women Skirt', 'size' => 'small', 'color' => 'green', 'brand' => 'HM'],
            ['name'=> 'Women Skirt', 'size' => 'small', 'color' => 'blue', 'brand' => 'HM'],
            ['name'=> 'Women Skirt', 'size' => 'large', 'color' => 'black', 'brand' => 'HM']
        ];

        \App\Product::insert($prodcuts);
    }
}
