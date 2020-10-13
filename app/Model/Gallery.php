<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['title','featured'];

    public function images()
    {
    		return $this->hasMany(Image::class);
    } 
}
