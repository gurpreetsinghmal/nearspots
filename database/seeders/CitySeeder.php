<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;
use \DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();
        $data=array(
            array("name"=>"Mansa","state_id"=>21),
            array("name"=>"Barnala","state_id"=>21),
        );
        City::insert($data);
    }
}
