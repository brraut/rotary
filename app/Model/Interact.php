<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Interact extends Model
{
    protected $fillable = ['title','facebook_url','website_url','description', 'featured'];

}
