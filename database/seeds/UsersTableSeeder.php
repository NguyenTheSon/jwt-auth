<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User();
        $admin->_id = '1';
        $admin->name = 'TheSon';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('admin');
        $admin->save();
        
        $admin = new \App\User();
        $admin->_id = '2';
        $admin->name = 'Hoang';
        $admin->email = 'abc@gmail.com';
        $admin->password = Hash::make('admin');
        $admin->save();
    }
}
