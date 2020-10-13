<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    protected $fillable = ['title','subtitle','description', 'featured'];
}
