<?php

use Illuminate\Database\Seeder;
use App\Disc;

class DiscTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discs')->delete();

        Disc::create(array(
            'movie_id' => '1',
            'kiosk_id' => '8',
            'disc_type' => 'dvd',
        ));
    }
}
