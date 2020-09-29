<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KuralResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->kural_no,
            'tn' => $this->kural_tn,
            'en' => $this->kural_en,
            'tr' => $this->kural_tr,
            'exp' => $this->en_explanation,
            't1' => $this->tamil_poet_1,
            't2' => $this->tamil_poet_2,
            't3' => $this->tamil_poet_3,
        ];
    }
}
