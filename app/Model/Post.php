<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','slug','description','featured','file','ncategory_id','user_id'];
    
    
    public function setTitleAttribute($value)
    {           
            $this->attributes['title'] = $value;
            $this->attributes['slug'] = str_slug($value);
    } 

    public function ncategory()
    {
    		return $this->belongsTo(Ncategory::class);
    } 

    public function user()
    {
    		return $this->belongsTo(User::class);
    } 
}
