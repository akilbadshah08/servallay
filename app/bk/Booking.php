<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $table = "payments";

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
