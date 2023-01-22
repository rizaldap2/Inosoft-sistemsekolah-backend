<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Subject extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'subjects';
    protected $guarded = ['id'];
}
