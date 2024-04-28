<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'acid',
            'email' => 'acidprjct@gmail.com',
            'password' => Hash::make('acid')
        ]);

            //data dummy for company
\App\Models\Company::create([
    'name' => 'RS PKU AISYIYAH BOYOLALI',
    'email' => 'rspkuboyolali@gmail.com',
    'address' => 'Jl. Pasar Sapi Baru Singkil, Karanggeneng, Kec. Boyolali, Jawa Tengah 57312',
    'latitude' =>'-7.520085495795877',
    'longitude' =>'110.6069053',
    'radius_km' =>'1',
    'time_in' => '07.00',
    'time_out' => '14.00',
    ]);
    }
}
