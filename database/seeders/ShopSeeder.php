<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shop;
use \DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('shops')->delete();
        $data=array(
            array("name"=>"Chicago Pizza","slug_name"=>"Chicago-Pizza","lat"=>10.850516,"banner"=>'https://static.toiimg.com/thumb/53110049.cms?width=1200&height=900',"lng"=>76.271080,"category_id"=>1,"subcategory_id"=>1,'state_id'=>21,'city_id'=>1),

            array("name"=>"Khoobsurat Jewellers","slug_name"=>"Khoobsurat-Jewellers","lat"=>21.7679,"banner"=>'https://assets.vogue.in/photos/634fdc0b5bf830526a1de2c4/2:3/w_2560%2Cc_limit/278898158_712063919922059_8157657948962494199_n.jpg',"lng"=>78.8718,"category_id"=>2,"subcategory_id"=>1,'state_id'=>21,'city_id'=>1),

            array("name"=>"Jindal PG for Boys","slug_name"=>"Jindal-PG-for-Boys","lat"=>29.065773,"banner"=>'https://teja12.kuikr.com/is/a/c/880x425/public/images/apartments/original_img/k9yqlp.gif',"lng"=>76.040497,"category_id"=>3,"subcategory_id"=>1,'state_id'=>21,'city_id'=>2),

            array("name"=>"Keshav Sanitations","slug_name"=>"Keshav-Sanitations","lat"=>22.309425,"banner"=>'https://www.benjaminfranklinplumbing.com/images/blog/10-Reasons-Why-a-Professional-Plumber-Is-Better-Than-DIY-_-Katy-TX.jpg',"lng"=>72.136230,"category_id"=>4,"subcategory_id"=>1,'state_id'=>21,'city_id'=>1),

            array("name"=>"Sangha Medical Hall","slug_name"=>"Sangha-Medical-Hall","lat"=>23.745127,"banner"=>'https://images1-fabric.practo.com/practices/1319712/women-s-health-clinic-gurgaon-60276b1e510c8.jpg',"lng"=>91.746826,"category_id"=>5,"subcategory_id"=>1,'state_id'=>21,'city_id'=>1),

            array("name"=>"Chandigarh Computer Center","slug_name"=>"Chandigarh-Computer-Center","lat"=>32.084206,"banner"=>'https://img.business.com/w/700/aHR0cHM6Ly9pbWFnZXMuYnVzaW5lc3NuZXdzZGFpbHkuY29tL2FwcC91cGxvYWRzLzIwMjIvMDQvMDQwNzQ1NTMvMTU1NDI0NDAxMC5qcGVn',"lng"=>77.571167,"category_id"=>6,"subcategory_id"=>1,'state_id'=>21,'city_id'=>1),
        );
        Shop::insert($data);
    }
}
