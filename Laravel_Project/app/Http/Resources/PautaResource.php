<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PautaResource extends JsonResource
{

    public static $wrap = 'pauta';

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'designacao' => $this->designacao,
            'dirty' => $this->dirty,
            'resultado' => $this->resultado,
        ];
    }
}
