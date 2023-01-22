<?php

namespace App\Http\Resources;

use App\Models\Score;
use Illuminate\Http\Resources\Json\JsonResource;
use MongoDB\BSON\ObjectId;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //pick up all score with id student to see detail score
        // $score = Score::select(['student_id', 'assignment_1', 'assignment_2', 'assignment_3', 'assignment_4', 'daily_test_1', 'daily_test_2', 'mid_test', 'final_test'])->where('student_id', '=', $this->_id)->get();
        $score = Score::where('student_id', '=', new ObjectId($this->_id))->get();
        return [
            '_id' => $this->_id,
            'name' => $this->name,
            'classroom_id' => $this->classroom_id,
            'scores' => CounterScoreResource::collection($score),
        ];
    }
}
