<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;

// call relational
use App\Models\Student;

class Classroom extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'classrooms';
    protected $guarded = ['id'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
