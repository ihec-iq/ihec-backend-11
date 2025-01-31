<?php

namespace App\Http\Resources\Hr;

use App\Http\Resources\Document\DocumentHrBotResource;
use App\Http\Resources\Document\DocumentResource;
use App\Http\Resources\Employee\EmployeeBigLiteResource;
use App\Http\Resources\Employee\EmployeeLiteResource;
use App\Http\Resources\User\UserLiteResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HrDocumentResource extends JsonResource
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
            'title' => $this->title,
            'number' => $this->number,
            'addDays' => $this->add_days,
            'addMonths' => $this->add_months,
            'issueDate' => $this->issue_date,
            'isActive' => $this->is_active,
            'HrDocumentType' => new HrDocumentTypeResource($this->Type),
            'Employee' => new EmployeeBigLiteResource($this->Employee),
            'UserCreate' => new UserLiteResource($this->UserCreate),
            'UserUpdate' => new UserLiteResource($this->UserUpdate),
            'FilesDocument' => DocumentResource::collection($this->Documents),
            //'FilesBot' => DocumentHrBotResource::collection($this->Documents),
            'FilesLocal' => DocumentHrBotResource::collection($this->Documents),
            'notes' => $this->notes,
        ];
    }
}
