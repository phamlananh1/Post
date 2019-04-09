<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'Tran Dung';
        $user->email = 'anh@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();

        $user = new \App\User();
        $user->name = 'Phi Diep';
        $user->email = 'lan@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();
    }
}
