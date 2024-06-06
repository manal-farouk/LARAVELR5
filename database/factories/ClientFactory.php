<?php

$factory->define(Client::class, function (Faker $faker) {
    return [
        'clientName' => $faker->company,
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'website' => $faker->domainName,
        'city' => $faker->city,
        'image' => 'assets/images/placeholder.jpg', // Replace with a placeholder image path
        'active' => true,
    ];
});
