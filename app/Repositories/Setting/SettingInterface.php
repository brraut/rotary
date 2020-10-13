<?php 

namespace App\Repositories\Setting;

interface SettingInterface
{
	
    public function getSettings(); 
    public function renew($array); 
   
}