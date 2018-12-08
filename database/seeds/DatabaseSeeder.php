<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KiosksTableSeeder::class);
        $this->call(InventoryTableSeeder::class);
        $this->call(MovieSeeder::class);
        //$this->call(DiscRentalsTableSeeder::class);
        //$this->call(DiscTableSeeder::class);
        //$this->call(DiscUsersTableSeeder::class);
    }
}
