<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['privacy_policy', 'footer_contacts','phone','email','footer_about','fb_url','twitter_url','linkedIn_url','featured','members_pdf'];
}
