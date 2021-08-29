<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $table = "payment";
    protected $guarded = [];

	public function users()
    {

        return $this->belongsTo(User::class, 'id');

    }
}
