<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Convention extends Model
{
    protected $table = "convention";

    public function student()
    {
        return $this->belongsToMany('App\Model\Student');
    }

    public function certificate()
    {
        return $this->belongsTo('App\Model\Certificate');
    }
}
