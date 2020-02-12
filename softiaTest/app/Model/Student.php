<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "student";

    public function convention()
    {
        return $this->hasOne('App\Model\Convention');
    }

    public function certificate()
    {
        return $this->belongsTo('App\Model\Certificate');
    }
}
