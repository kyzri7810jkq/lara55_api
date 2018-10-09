<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Article extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);

       /* return [
            'id' => $this->id,
            'title' => $this->title,
            'body'  => $this->body
        ];*/
    }

    /* Ako ni gibutang diri para additional info sa API
     */
    public function with($request)
    {
        return [
            'author'  => 'Sam',
            'date_released' => 'October 9,2018',
            'version' => '1.0'
        ];
    }
}
