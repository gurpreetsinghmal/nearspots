<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->delete();
        $data = array(
        array("subcat_name"=>"Food","category_id"=>1),
        array("subcat_name"=>"Burger","category_id"=>1),
        array("subcat_name"=>"Pizza","category_id"=>1),
        array("subcat_name"=>"Tops","category_id"=>2),
        array("subcat_name"=>"Coats","category_id"=>2),
        array("subcat_name"=>"Jeans","category_id"=>2)
       );

        Subcategory::insert($data);
    }
}
