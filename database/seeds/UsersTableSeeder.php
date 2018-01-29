<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::Create([
            'firstname'=> 'deleke',
            'lastname'=> 'adeleke',
            'username'=> 'adeleke',
            'email'=> 'deleke@yahoo.com',
            'password'=> bcrypt('deleke'),
            'sex'=> 'male',
            'role_id' => 1,
            'active' => 1,
            'remember_token'=> str_random(10),

        ]);
    }
}
