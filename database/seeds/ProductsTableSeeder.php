<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        Category::truncate();

        $category = new Category;
        $category->name = 'Moviles';
        $category->description = 'Smartphones y terminales registrados desde 2015';
        $category->save();

        $category = new Category;
        $category->name = 'Comidas';
        $category->description = 'Engloba embutidos, pasta, bebida, carne y pescado';
        $category->save();

        $category = new Category;
        $category->name = 'Ordenadores y Portátiles';
        $category->description = 'Windows, Apple y marcas neutrales principalmente';
        $category->save();

        $category = new Category;
        $category->name = 'Electrodomésticos';
        $category->description = 'Todo tipo de electrodomésticos';
        $category->save();

        $product = new Product;
        $product->name = 'iPhone X';
        $product->description = 'Terminal de ultima generación de Apple';
        $product->brand = 'Apple';
        $product->user_id = '1';
        $product->category_id = '1';
        $product->save();

        $product = new Product;
        $product->name = 'Tortilla de patatas';
        $product->description = 'Hecha con patata de la huerta de murcia';
        $product->brand = 'PatNatur';
        $product->user_id = '2';
        $product->category_id = '2';
        $product->save();

        $product = new Product;
        $product->name = 'Portatil Envy 16';
        $product->description = 'Free Os + maletin + raton inalambrico';
        $product->brand = 'HP';
        $product->user_id = '1';
        $product->category_id = '3';
        $product->save();

        $product = new Product;
        $product->name = 'Lavadora';
        $product->description = 'AAA de Alta eficiencia';
        $product->brand = 'Bosch';
        $product->user_id = '2';
        $product->category_id = '4';
        $product->save();
    }
}
