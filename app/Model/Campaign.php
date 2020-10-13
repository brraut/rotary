<?php

namespace App\Model;

use App\Model\Funding;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = ['title','description', 'featured'];
    public function fundings()
    {
    	return $this->hasMany(Funding::class);
    			
    } 
}
