<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    //
    protected $fillable = ['title_no', 'land_size', 'land_location', 'land_price'];
}
