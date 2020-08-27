<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChapterGroupResource extends JsonResource
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
            'id' => $this->chap_grp_no,
            'tn' => $this->chap_grp_tn,
            'en' => $this->chap_grp_en,
            'tr' => $this->chap_grp_tr,
            'fr' => $this->from_chap,
            'to' => $this->to_chap,
            'chaps' => $this->to_chap - $this->from_chap + 1
        ];
    }
}
