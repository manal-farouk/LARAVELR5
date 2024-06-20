<?php
Update tables
php artisan migrate
php artisan migrate:status
php artisan migrate:rollback
php artisan migrate:reset
php artisan migrate:refresh
php artisan migrate:fresh

composer create-project laravel/laravel example-app
cd example-app
php artisan serve
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

php artisan migrate

C:\xampp\htdocs\healet>code .
bootstrap templates

theme wagon template

@extends('layouts.main')

@section('content')

   @include('includes.scheduleArea')


      @endsection('content')


img/(.+).jpg
{{asset('assets/img/$1.jpg')}}
{{asset('assets/images/$1.jpg')}}

img/(.+).png
{{asset('assets/img/$1.png')}}

js/(.+).js
{{asset('assets/js/$1.js')}}

css/(.+).css
{{asset('assets/css/$1.css')}}

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPages;


Route::get('/', [FrontPages::class, 'about'])->name('about');
Route::get('contactUs', [FrontPages::class, 'contactUs'])->name('contactUs');

php artisan make:controller ControllerName

php artisan make:seeder MySeeder

class UserFactory extends Factory {
    public function definition(): array {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ];
    }



php artisan make:factory TagFactory -m Tag

$tag = Tag::factory()->create();



php artisan make:migration create_cities_table
php artisan migrate:fresh
php artisan migrate:fresh—seed
php artisan make:seeder UserSeeder
php artisan db:seed
php artisan db:seed --class=UserSeeder
php artisan make:factory ClientFactory
php artisan make:model City
php artisan migrate:fresh—seed
php artisan make:migration create_courses_table
php artisan make:migration create_Student_model







namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Student extends Model
{

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'course_id',

        ];

}

class Student extends Model
{
    // Define a hasMany relationship with the Course model
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}











php artisan migrate:fresh—seed
php artisan db:seed
php artisan make:model Course

composer require laravel/ui      مكتبة



