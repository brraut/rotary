<?php

namespace App\Model;

use App\Model\Mtype;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['member_id','name','address','description','position','featured'];

    public function mtypes()
    {
    		return $this->belongsToMany(Mtype::class);
    } 
}
