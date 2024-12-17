<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RoleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'guard_name' => $this->guard_name,
            'description' => $this->description,
            'Relations' => [
                'created_by' => [
                    'id' => $this->createdBy ? $this->createdBy->id : "null",
                    'name' => $this->createdBy ? $this->createdBy->name : "null",
                ],
                'updated_by' => [

                    'id' => $this->updatedBy ? $this->updatedBy->id : "null",
                    'name' => $this->updatedBy ? $this->updatedBy->name : "null",

                ],
                'permissions' => $this->rolePermissions->map(function ($permission) {
                    return [
                        'id' => $permission->id,
                        'name' => $permission->name,
                    ];
                }),
            ],

        ];
    }
}
