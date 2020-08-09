<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Blog extends JsonResource
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
            'id' => $this->id,
            'title'=>$this->title,
            'content' => $this->content,
             //'user'=>$this->user,
            'user'=> new User($this->user),
            'detalle'=>DetalleBlog::collection($this->detalle_blogs),
            //'image'=>$this->image,
            //'tags'=>$this->tags,          
            ];
    }
}
