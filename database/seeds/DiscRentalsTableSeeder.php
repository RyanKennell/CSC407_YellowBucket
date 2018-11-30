<?php

use Illuminate\Database\Seeder;
use App\DiscRental;

class DiscRentalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disc_rentals')->delete();

        DiscRental::create(array(
            'users_id' => 1,
            'disc_id' => 1,
            'rentalDate' => '2018-07-23 10:00:00',
            'returnDate' => '2018-07-24 09:23:15',
        ));
    }
}
