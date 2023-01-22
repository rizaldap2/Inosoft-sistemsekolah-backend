<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ScoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            '_id' => $this->_id,
            'subject_id' => $this->subject_id,
            'student_id' => $this->student_id,
            'assignment_1' => $this->assignment_1,
            'assignment_2' => $this->assignment_2,
            'assignment_3' => $this->assignment_3,
            'assignment_4' => $this->assignment_4,
            'daily_test_1' => $this->daily_test_1,
            'daily_test_2' => $this->daily_test_2,
            'mid_test' => $this->mid_test,
            'final_test' => $this->final_test,
        ];
    }
}
