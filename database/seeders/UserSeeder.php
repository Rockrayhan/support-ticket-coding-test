<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $userObj = new User();
            $userObj->name = 'Mr. customer';
            $userObj->email = 'user@gmail.com';
            $userObj->password = Hash::make('123456789');
            $userObj->type = 0;
            $userObj->save();
    
            $adminObj = new User();
            $adminObj->name = 'Admin Sir';
            $adminObj->email = 'admin@gmail.com';
            $adminObj->password = Hash::make('123456789');
            $adminObj->type = 1;
            $adminObj->save();
    

    
        }
    }
}
