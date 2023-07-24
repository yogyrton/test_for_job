<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFilialRequest;
use App\Http\Resources\Filial\FilialResource;
use App\Models\Filial;

class FilialController extends Controller
{
    public function index()
    {
        return FilialResource::collection(Filial::all());
    }

    public function store(StoreFilialRequest $request)
    {
        $filial = Filial::query()->create($request->validated());

        return FilialResource::make($filial);
    }

    public function show(Filial $filial)
    {
        return FilialResource::make($filial);
    }
}
