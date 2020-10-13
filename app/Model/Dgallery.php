<?php

namespace App\Model;

use App\Model\Destination;
use Illuminate\Database\Eloquent\Model;

class Dgallery extends Model
{
     protected $fillable = ['destination_id','featured'];

     public function destination()
     {
     		return $this->belongsTo(Destination::class);
     } 
}
