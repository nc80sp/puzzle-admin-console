<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'item_id' => $this->id,
            'amount' => $this->pivot->amount,
            'updated_at' => $this->pivot->updated_at
        ];
    }
}
