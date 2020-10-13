<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['gallery_id','featured'];

     public function gallery()
     {
     		return $this->belongsTo(Gallery::class);
     } 
}
