<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
              'name' => 'مدیر ارشد',
              'type_id' => '1',
              'email'=>'superadmin@site.com',
              'password'=>'1234567890'
            ],
            [
                'name' => 'مدیر',
                'type_id' => '2',
                'email'=>'admin@site.com',
                'password'=>'1234567890'
            ],
            [
                'name' => 'کاربر',
                'type_id' => '3',
                'email'=>'user@site.com',
                'password'=>'1234567890'
            ],
        ];
        foreach ($users as $user)
        {
            User::create($user);
        }
    }
}
