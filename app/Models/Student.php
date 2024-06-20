<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\models\Course;

class Student extends Model
{
    use HasFactory, SoftDeletes;
protected $fillable = [
    'first_name',
    'last_name',
    'course_id',
    'age',

];
public function course()
{
    return $this->belongsTo(Course::class);
}
}




