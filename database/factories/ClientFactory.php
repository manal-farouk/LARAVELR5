<?php
namespace Database\Factories;
use Faker\Generator as Faker;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class ClientFactory extends Factory
{

    protected $model = Client::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ClientName' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'email' => now(),
            'website' => $this->faker->url(),
            //'city' => $this->faker->name(),
            'city_id' => $this->faker->numberBetween(1, 30),
            'image' => $this->faker->imageUrl(640,480),
            'active' => $this->faker->boolean(),
            'address' => $this->faker->address(),
        ];
    }
}
