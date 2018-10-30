<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        Model::unguard();

        $this->call(PeopleTableSeeder::class);
        $this->call(KiosksTableSeeder::class);

=======
        // $this->call(UsersTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
>>>>>>> refs/remotes/origin/Ryan_Branch_Movies_Display
    }
}
