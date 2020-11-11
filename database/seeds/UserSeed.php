<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 9; $i++)
        {
            \App\User::create([
                'name' => "johndoe$i",
                'email' => "johndoe$i@doe.fr",
                'password' => bcrypt('1234'),
                'role_id' => 1
            ]);
        }
    }
}
