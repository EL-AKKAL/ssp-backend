<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'birthdate' => $this->birthdate,
            'role' => $this->role,
            'gender' => $this->gender,
            'bio' => $this->bio,
            'description' => $this->description,
            'profile_picture' => $this->profile_picture,
            'location' => $this->location,
            'social_links' => $this->socialLinks,
        ];
    }
}
