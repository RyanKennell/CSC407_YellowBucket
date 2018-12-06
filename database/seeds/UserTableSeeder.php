<?php

use Illuminate\Database\Seeder;
use App\User;

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

        User::create(array(
            'name'=> 'Scott',
            'address'=> '711-Brownstown Rd, Larimer PA',
            'email'=> 'scoot@example.org',
            'email_verified_at'=> 'scoot@example.org',
            'password'=> 'Dog',
        ));
    }
}
