<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('12345678');
        for ($i=0; $i < 500; $i++) {
            User::create([
                'name' => Str::random(8),
                'email' => Str::random(8).'@mail.com',
                'password' => $password,
            ]);
        }
    }

}
