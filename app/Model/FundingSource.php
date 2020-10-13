<?php

namespace App\Model;

use App\Model\Funding;
use Illuminate\Database\Eloquent\Model;

class FundingSource extends Model
{
    protected $fillable = ['type','slug'];

    public function fundings()
    {
    	return $this->hasMany(Funding::class);
    			
    } 
}
