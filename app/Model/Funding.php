<?php

namespace App\Model;

use App\Model\FundingSource;
use App\Model\Campaign;

use Illuminate\Database\Eloquent\Model;

class Funding extends Model
{
    protected $fillable = ['name','address','email','funding_source_id','campaign_id'];

    public function funding_source()
    {
    		return $this->belongsTo(FundingSource::class);
    } 
    public function campaign()
    {
    		return $this->belongsTo(Campaign::class);
    } 
}
