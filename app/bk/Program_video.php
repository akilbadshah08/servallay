<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Program_video extends Model
{
    //
    protected $table = "program_videos";

    protected $guarded = [];


    protected $appends = ["thumbs"];

    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'library_name'
            ]
        ];
    }





    public function images()
    {
        return $this->morphMany("App\Images","imageable");
    }

    public function getThumbsAttribute()
    {
        $images = isset($this->images()->first()->name)?asset("uploads/thumb_".$this->images()->first()->name):"";
        return '<img src="' .$images.'" class="img-thumbnail" width="100" />';
    }


}
