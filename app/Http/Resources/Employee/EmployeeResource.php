<?php

namespace App\Http\Resources\Employee;

use App\Enums\EmployeeEnum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'position' => EmployeeEnum::getDescription($this->position),
        ];
    }
}
