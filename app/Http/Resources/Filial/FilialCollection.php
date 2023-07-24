<?php

namespace App\Http\Resources\Filial;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FilialCollection extends ResourceCollection
{

    public function toArray(Request $request): array
    {
        return [
            'filials' => $this->collection,
        ];
    }
}

