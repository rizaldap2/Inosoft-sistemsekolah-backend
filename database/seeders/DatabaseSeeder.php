<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use MongoDB\BSON\ObjectId;
use Faker\Factory as Faker;

use App\Models\User;
use App\Models\Score;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Classroom;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

    }
}
