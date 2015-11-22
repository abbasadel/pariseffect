<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident
{
    public $description;
    public $date;
    public $city;
    public $country;
    public $lat;
    public $long;
    public $type;
    public $link;
    public $victimCountry;
    public $victimGender;
    public $reporterType;
    public $reporterContact;
    public $created_at;

    public function address()
    {
        return $this->city . ', ' . $this->country;
    }
}
