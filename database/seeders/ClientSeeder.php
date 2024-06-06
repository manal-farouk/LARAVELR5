<?php

use Illuminate\Database\Seeder;
use App\Models\Client;
use Faker\Factory as Faker;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) { // Create 50 sample clients
            ClientSeeder::create([
                'clientName' => $faker->company,
                'phone' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'website' => $faker->domainName,
                'city' => $faker->city,
                'image' => 'assets/images/placeholder.jpg', // Replace with a placeholder image path
                'active' => true,
            ]);
        }
    }
}
