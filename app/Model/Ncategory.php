<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ncategory extends Model
{
    protected $fillable = ['title'];

    public function posts()
    {
    		return $this->hasMany(Post::class);
    } 
}
