<?php

use App\Hotel;
use Illuminate\Database\Seeder;

class HotelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->delete();
        Hotel::create(array('id' => 1, 'created_at' => '2016-11-07 16:10:46', 'updated_at' => '2016-11-07 16:10:46', 
            'name' => 'Radisson Blu Latvija', 'description' => 'The largest conference hotel in the Baltic States',
            'stars' => 4, 'price_single' => 50, 'price_double' => 70, 'price_triple' => 80, 'city_id'=>1));
        Hotel::create(array('id' => 2, 'created_at' => '2016-11-07 16:10:46', 'updated_at' => '2016-11-07 16:10:46', 
            'name' => 'Roma', 'description' => 'The elegant hotel located in the heart of Riga’s Old Town',
            'stars' => 4, 'price_single' => 45, 'price_double' => 65, 'price_triple' => 85, 'city_id'=>1));
        Hotel::create(array('id' => 3, 'created_at' => '2016-11-07 16:10:46', 'updated_at' => '2016-11-07 16:10:46', 
            'name' => 'Dzintarjura', 'description' => '3-star hotel located in the heart of Ventspils',
            'stars' => 3, 'price_single' => 35, 'price_double' => 55, 'price_triple' => 63, 'city_id'=>2));
        Hotel::create(array('id' => 4, 'created_at' => '2016-11-07 16:10:46', 'updated_at' => '2016-11-07 16:10:46', 
            'name' => 'Vilnis', 'description' => 'A pleasant 3-star hotel in the north of Ventspils',
            'stars' => 3, 'price_single' => 37, 'price_double' => 54, 'price_triple' => 65, 'city_id'=>2));
        Hotel::create(array('id' => 5, 'created_at' => '2016-11-07 16:10:46', 'updated_at' => '2016-11-07 16:10:46', 
            'name' => 'Kolonna', 'description' => '3-star hotel in the centre of Rezekne, directly on the banks of the Rezekne River',
            'stars' => 3, 'price_single' => 43, 'price_double' => 49, 'price_triple' => 60, 'city_id'=>3));
        Hotel::create(array('id' => 6, 'created_at' => '2016-11-07 16:10:46', 'updated_at' => '2016-11-07 16:10:46', 
            'name' => 'Latgale', 'description' => '12 minutes walk from the beach',
            'stars' => 3, 'price_single' => 41, 'price_double' => 47, 'price_triple' => 59, 'city_id'=>3));
        Hotel::create(array('id' => 7, 'created_at' => '2016-11-07 16:10:46', 'updated_at' => '2016-11-07 16:10:46', 
            'name' => 'Telegraaf', 'description' => 'Only 70 m from Tallinn Town Hall Square',
            'stars' => 5, 'price_single' => 120, 'price_double' => 140, 'price_triple' => 160, 'city_id'=>4));
        Hotel::create(array('id' => 8, 'created_at' => '2016-11-07 16:10:46', 'updated_at' => '2016-11-07 16:10:46', 
            'name' => 'Palace', 'description' => 'Located in the centre of Tallinn and originally built in 1930s',
            'stars' => 4, 'price_single' => 94.5, 'price_double' => 104, 'price_triple' => 145, 'city_id'=>4));
        Hotel::create(array('id' => 9, 'created_at' => '2016-11-07 16:10:46', 'updated_at' => '2016-11-07 16:10:46', 
            'name' => 'London', 'description' => 'Located in the heart of Tartu Old Town',
            'stars' => 4, 'price_single' => 74, 'price_double' => 85, 'price_triple' => 90, 'city_id'=>5));
        Hotel::create(array('id' => 10, 'created_at' => '2016-11-07 16:10:46', 'updated_at' => '2016-11-07 16:10:46', 
            'name' => 'Dorpat', 'description' => 'This property is 3 minutes walk from the beach',
            'stars' => 3, 'price_single' => 65, 'price_double' => 83, 'price_triple' => 87, 'city_id'=>5));
        Hotel::create(array('id' => 11, 'created_at' => '2016-11-07 16:10:46', 'updated_at' => '2016-11-07 16:10:46', 
            'name' => 'Estonia', 'description' => 'Only a 5-minute walk from the sea and 15 minutes from the centre of Pärnu',
            'stars' => 4, 'price_single' => 74, 'price_double' => 98, 'price_triple' => 124, 'city_id'=>6));
        Hotel::create(array('id' => 12, 'created_at' => '2016-11-07 16:10:46', 'updated_at' => '2016-11-07 16:10:46', 
            'name' => 'Hansalinn', 'description' => 'This property is 15 minutes walk from the beach',
            'stars' => 3, 'price_single' => 38, 'price_double' => 41, 'price_triple' => 73, 'city_id'=>6));
        Hotel::create(array('id' => 13, 'created_at' => '2016-11-07 16:10:46', 'updated_at' => '2016-11-07 16:10:46', 
            'name' => 'Ramada', 'description' => 'Located directly on Vilnius’s Old Town',
            'stars' => 5, 'price_single' => 121.5, 'price_double' => 130.5, 'price_triple' => 169.5, 'city_id'=>7));
        Hotel::create(array('id' => 14, 'created_at' => '2016-11-07 16:10:46', 'updated_at' => '2016-11-07 16:10:46', 
            'name' => 'AirInn', 'description' => 'Situated on the grounds of Vilnius International Airport',
            'stars' => 3, 'price_single' => 65, 'price_double' => 72, 'price_triple' => 84, 'city_id'=>7));
        Hotel::create(array('id' => 15, 'created_at' => '2016-11-07 16:10:46', 'updated_at' => '2016-11-07 16:10:46', 
            'name' => 'Santakos', 'description' => 'Located in Kaunas, less than 100 m from the Old Town',
            'stars' => 4, 'price_single' => 47, 'price_double' => 53, 'price_triple' => 78, 'city_id'=>8));
        Hotel::create(array('id' => 16, 'created_at' => '2016-11-07 16:10:46', 'updated_at' => '2016-11-07 16:10:46', 
            'name' => 'Kaunas City', 'description' => 'Located only 450 m from Kaunas’s Old Town',
            'stars' => 2, 'price_single' => 36, 'price_double' => 42, 'price_triple' => 51, 'city_id'=>8));
        Hotel::create(array('id' => 17, 'created_at' => '2016-11-07 16:10:46', 'updated_at' => '2016-11-07 16:10:46', 
            'name' => 'Amberton', 'description' => 'The modern 4-star Amberton Klaipeda Hotel is located in the city centre',
            'stars' => 4, 'price_single' => 63.2, 'price_double' => 68, 'price_triple' => 171.4, 'city_id'=>9));
        Hotel::create(array('id' => 18, 'created_at' => '2016-11-07 16:10:46', 'updated_at' => '2016-11-07 16:10:46', 
            'name' => 'Lugne', 'description' => 'Located in Klaipeda’s Old Town',
            'stars' => 3, 'price_single' => 32.1, 'price_double' => 34, 'price_triple' => 45, 'city_id'=>9));
    }
}
