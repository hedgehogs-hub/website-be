<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class TeamMembers extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $id = $this->id;
        $socials = \App\TeamMembers::find($id)->get;
        $data = [];

        foreach ($socials as $index => $social) {
            $data[$index]['account_url'] = $social->account_url;
            $data[$index]['social_network_name'] = $social->socialNetwork->name ?? '';
            $data[$index]['social_network_url'] = $social->socialNetwork->url ?? '';
            $data[$index]['social_network_image_source'] = $social->socialNetwork->image_source ?? '';
        }

        return [
            'id' => $this->id,
            'name' => $this->name,
            'position' => $this->position,
            'about' => $this->about,
            'image_source' => $this->image_source,
            'socialAccounts' => $data,

        ];
    }
}
