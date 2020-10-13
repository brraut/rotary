<?php 

namespace App\Repositories\Setting;

use App\Model\Setting;

class SettingRepository implements SettingInterface
{
    public function __construct(Setting $setting)
    {
    		$this->setting = $setting;
    } 


    public function getSettings()
    {
    		return $this->setting->first();
    } 

    public function renew($array)
    {
            $this->getSettings()->update($array);
    } 

}