<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
                'is_admin'=>'1',
               'password'=> '123456',
            ],
            [
                'name'=>'allotiM',
                'is_admin'=>'1',
               'password'=> 'allotiM',
            ],
            [
               'name'=>'User',
                'is_admin'=>'1',
               'password'=> '123456',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
