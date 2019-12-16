<?php

namespace App\Http\Resources;

use App\Profile;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'address' => $this->Profile->address,
            'phone' => $this->Profile->phone,
            'blood_group' => $this->Profile->blood_group,
            'gender' => $this->Profile->gender,
        ];
    }
}
