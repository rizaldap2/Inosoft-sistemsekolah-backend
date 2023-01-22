<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CounterScoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $assignment= 0.15 * ( ($this->assignment_1+$this->assignment_2+$this->assignment_3+$this->assignment_4) / 4);
        $daily_test= 0.2 * (($this->daily_test_1+$this->daily_test_2) / 2);
        $mid_test=$this->mid_test * 0.25;
        $final_test=$this->final_test * 0.4;
        $total_score=$assignment+$daily_test+$mid_test+$final_test;
        return [
            'subjet_name' => $this->subject->name,
            'total_score' => $total_score,
        ];
    }
}
