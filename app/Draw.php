<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Draw extends Model
{
     protected $table = 'draws';
     protected $fillable = ['name','status'];
}
