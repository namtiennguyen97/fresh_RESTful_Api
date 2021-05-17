<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        $emailData = ['Admin@gmail.com','user@gmail.com'];
        $nameData = ['admin','user'];
        foreach ($emailData as $value){
            User::create([
                'name' => 'client',
                'email' => $value,
                'password' => Hash::make(12345678)
            ]);
        }
    }
}
