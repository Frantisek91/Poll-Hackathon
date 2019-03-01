<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function user()
    {
        return $this->belongsTo("\App\User");
    }

    public function polls()
    {
        return $this->belongsToMany("\App\Poll");
    }
}
