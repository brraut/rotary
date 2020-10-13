<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    protected $fillable = ['name','position','duration','description', 'featured'];
}
