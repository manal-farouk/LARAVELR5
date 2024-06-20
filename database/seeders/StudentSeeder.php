<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

            DB::table('students')->insert([

                    'first_name' => $faker->name,
                    'last_name' => $faker->name,
                    'course_id' => numberBetween(1, 20),
                    'age' => $faker->number,
                    'created_at' => now(),
                    'updated_at' => now(),


            ]);
    }
}
