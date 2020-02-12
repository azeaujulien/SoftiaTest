<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $table = "certificate";

    public function convention()
    {
        return $this->hasOne('App\Model\Convention');
    }

    public function student()
    {
        return $this->hasOne('App\Model\Student');
    }
}
