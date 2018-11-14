<?php

use Illuminate\Database\Seeder;
use App\DiscUser;

class DiscUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disc_user')->delete();

        DiscUser::create(array(
            'users_id' => 1,
            'disc_id' => 1,
        ));
    }
}
