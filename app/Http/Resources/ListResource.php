<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'user_id'=>$this->user_id,
            'account_number'=>$this->account_number,
            'balance'=>$this->balance,
            'account_number'=>$this->currency_id,
            // 'created_at'=>$this->created_at,
            // 'updated_at'=>$this->updated_at,
        ];
    }
}
