<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Resources\Employee\EmployeeResource;
use App\Models\Employee;
use App\Models\Filial;

class EmployeeController extends Controller
{

    public function store(StoreEmployeeRequest $request, Filial $filial)
    {
        $data = $request->validated();

        $employee = Employee::query()->create([
            'name' => $data['name'],
            'position' => $data['position'],
            'filial_id' => $filial->id,
        ]);

        return new EmployeeResource($employee);
    }
}
