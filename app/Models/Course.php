<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\models\Student;


class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course',
    ];
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}


