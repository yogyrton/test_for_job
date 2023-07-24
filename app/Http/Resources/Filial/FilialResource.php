<?php

namespace App\Http\Resources\Filial;

use App\Http\Resources\Employee\EmployeeResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FilialResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'employees' => $this->when($request
                ->route()
                ->named('filials.show'), function () {
                return EmployeeResource::collection($this->employees);
            }),
        ];
    }
}
