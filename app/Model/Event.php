<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title','description','featured', 'slug','start_date'];

    protected $dates=['start_date'];


   	public function setTitleAttribute($value)
    {           
            $this->attributes['title'] = $value;
            $this->attributes['slug'] = str_slug($value);
    } 
}
