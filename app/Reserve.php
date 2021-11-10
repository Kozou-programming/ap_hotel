<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    public function getData()
    {
        return $this->person_id.$this->member.$this->checkIn.$this->checkIn;
    }
}
