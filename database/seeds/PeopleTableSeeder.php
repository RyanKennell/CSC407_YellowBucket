<?php

use Illuminate\Database\Seeder;
use App\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->delete();

        Person::create(array(
           'firstname'=> 'Scott',
            'lastname'=> 'Madeira',
            'email'=> 'scoot@example.org'
        ));
    }
}
