<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SectionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->section_no,
            'tn' => $this->section_tn,
            'en' => $this->section_en,
            'tr' => $this->section_tr,
            'cg' => $this->chap_groups,
            'c' => $this->chaps,
            'k' => $this->kurals,
            'fr' => $this->from_chap,
            'to' => $this->to_chap,
            'chaps' => $this->to_chap - $this->from_chap + 1,
        ];
    }
}
