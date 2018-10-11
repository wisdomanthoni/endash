<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Match extends Model
{
    public function homeTeam()
    {
        return $this->belongsTo(Club::class,'home');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Club::class, 'away');
    }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

     public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function getTime()
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $this->datetime);
        return $date->format("H:i A");

    }

    public function date()
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $this->datetime)->format('Y-m-d');
        return $date;
    }

    public function parseDate()
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $this->datetime)->toDateTimeString();
        return $date;
    }


    public function parseTime()
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $this->datetime);
        return $date->diffForHumans();

    }

}
