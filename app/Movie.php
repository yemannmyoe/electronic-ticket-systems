<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
     protected $fillable = ['name','language','duration','photo','restriction','rating'];

}
