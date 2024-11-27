<?php

namespace App\Http\Resources\Bonus;

use App\Http\Resources\GeneralIdNameResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BonusDegreeStageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => 'الدرجة '.$this->Degree->name . ' المرحلة ' . $this->Stage->name,
            'Degree' => new GeneralIdNameResource($this->Degree),
            'Stage' => new GeneralIdNameResource($this->Stage),
            'salary' => $this->salary,
            'yearlyBonus' => $this->yearly_bonus,
            'yearlyService' => $this->yearly_service, 
        ];
    }
}
