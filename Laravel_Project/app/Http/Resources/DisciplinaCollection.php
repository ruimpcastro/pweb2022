<?php

namespace App\Http\Controllers;

use Illuminate\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DisciplinaCollection extends Controller
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
