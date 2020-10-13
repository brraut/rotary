<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ['title','description', 'featured'];
}
