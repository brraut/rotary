<?php

namespace App\Model;

use App\Model\Dgallery;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = ['name','details','featured'];

    public function dgalleries()
    {
    		return $this->hasMany(Dgallery::class);
    } 
}
