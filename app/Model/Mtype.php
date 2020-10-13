<?php

namespace App\Model;

use App\Model\Member;
use Illuminate\Database\Eloquent\Model;

class Mtype extends Model
{
    protected $fillable = ['type','slug'];

    public function members()
    {
    	return $this->belongsToMany(Member::class);
    			
    } 
}
