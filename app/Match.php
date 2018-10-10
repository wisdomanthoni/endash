<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function home()
    {
        return $this->belongsTO(Club::class,'home');
    }

    public function away()
    {
        return $this->belongsTO(Club::class, 'away');
    }

    public function season()
    {
        return $this->belongsTO(Season::class);
    }

     public function competition()
    {
        return $this->belongsTO(Competition::class);
    }
}
