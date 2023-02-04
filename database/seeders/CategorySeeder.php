<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        $data = array(
        array("category_name"=>"Restaurent"),
        array("category_name"=>"Shopping"),
        array("category_name"=>"Real State"),
        array("category_name"=>"Local Service"),
        array("category_name"=>"Health and Medical"),
        array("category_name"=>"Professional Service"),
       );

        Category::insert($data);
    }
}
