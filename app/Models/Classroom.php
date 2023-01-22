<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'classrooms';
    protected $guarded = ['id'];
}
