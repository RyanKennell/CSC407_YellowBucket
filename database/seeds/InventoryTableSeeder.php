<?php

use Illuminate\Database\Seeder;

class InventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Inventories')->delete();

        Inventory::create(array(
            'copies' =>'22',
            'movie_id' =>'1',
            'kiosks_id' =>'2',
        ));
    }
}
