<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Marca;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camisas = Category::factory()->create(['name' => 'Camisas', 'image' => 'camisas.jpg']);
        Marca::factory()->create(['category_id' => $camisas->id, 'name' => 'Polo']);
        SubCategory::factory()->create(['category_id' => $camisas->id, 'name' => 'Chemise']);
        Marca::factory()->create(['category_id' => $camisas->id, 'name' => 'Adidas']);
        SubCategory::factory()->create(['category_id' => $camisas->id, 'name' => 'Franela']);

        $pantalones = Category::factory()->create(['name' => 'Pantalones', 'image' => 'pantalones.jpg']);
        Marca::factory()->create(['category_id' => $pantalones->id, 'name' => 'Warshal']);
        SubCategory::factory()->create(['category_id' => $pantalones->id, 'name' => 'Blue jean']);
        Marca::factory()->create(['category_id' => $pantalones->id, 'name' => 'Ovejita']);
        SubCategory::factory()->create(['category_id' => $pantalones->id, 'name' => 'Capri']);

        $accesorios = Category::factory()->create(['name' => 'Accesorios', 'image' => 'accesorios.jpg']);
        Marca::factory()->create(['category_id' => $accesorios->id, 'name' => 'Casio']);
        SubCategory::factory()->create(['category_id' => $accesorios->id, 'name' => 'Reloj']);
        Marca::factory()->create(['category_id' => $accesorios->id, 'name' => 'Nike']);
        SubCategory::factory()->create(['category_id' => $accesorios->id, 'name' => 'Sudadera']);

        $calcetines = Category::factory()->create(['name' => 'Calcetines', 'image' => 'calcetines.jpg']);
        Marca::factory()->create(['category_id' => $calcetines->id, 'name' => 'Perritos']);
        SubCategory::factory()->create(['category_id' => $calcetines->id, 'name' => 'Largos']);
        Marca::factory()->create(['category_id' => $calcetines->id, 'name' => 'Gatitos']);
        SubCategory::factory()->create(['category_id' => $calcetines->id, 'name' => 'Tobilleras']);
    }
}
