<?php

use Illuminate\Database\Seeder;
use App\Modelo\admin\Products;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  //guardar 20 registros
  $arrays = range(0,10);
  $increment=1;
  $increment2=1;
  foreach ($arrays as $valor) {
    DB::table('products')->insert([	            
        'sku' => '#-L'.$increment++,
        'nombre' => 'producto'.$increment2++,
        'precio' => 100,
        'precio_oferta' => 80,
        'descripcion' => 'Descripcion de cada producto',
        'img'=>'https://placeimg.com/500/500/any?'.rand(1, 100),
        'categoria_id'=>1,
        'marcas_id'=>1,
        'existencias'=>10
    ]);
  }

   
}

}