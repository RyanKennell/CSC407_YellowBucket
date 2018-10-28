<?php

use Illuminate\Database\Seeder;
use App\Kiosks;

class KiosksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kiosks')->delete();

        Kiosks::create(array(
           'location' =>'Giant Eagle, Chippewa',
            'address' =>'Giant Eagle Supermarket, 2650 Constitution Blvd, Beaver Falls, PA 15010',
        ));
    }
}
