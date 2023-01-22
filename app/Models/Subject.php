<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

// call relational
use App\Models\Score;

class Subject extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'subjects';
    protected $guarded = ['id'];

    public function scores()
    {
        return $this->hasMany(Score::class, 'subject_id','id');
    }


}
