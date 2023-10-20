<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Irawan";
        $user->email = "irawanbellamy@gmail.com";
        $user->password = Hash::make('123');
        $user->created_at = date('Y-m-d');
        $user->save();
    }
}
