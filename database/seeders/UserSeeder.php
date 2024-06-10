<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([


            'name'=>'manal',
            'email'=>'manalferr@gmail.com',
            'email_verified_at'=>now(),
            'password'=>Hash::make('manal1204'),
            'remember_token'=>str::random('10'),
        ]); 
    }
}
