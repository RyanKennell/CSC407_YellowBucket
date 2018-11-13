<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        Person::create(array(
            'name'=> 'Scott',
            'address'=> '711-Brownstown Rd, Larimer PA',
            'email'=> 'scoot@example.org',
            'email_verified_at'=> 'scoot@example.org',
        ));
    }
}
