<?php 

namespace App\Repositories\Cause;

use App\Model\Cause;

class CauseRepository implements CauseInterface
{
    public function __construct(Cause $slider)
    {
    		$this->slider = $slider;
    } 

    public function all($limit = null)
    {
        return $this->slider->orderBy('created_at','asc')->limit($limit)->get();
    } 

    public function save($array)
    {
    		$this->slider->create($array);
    } 

    public function findById($id)
    {
    		return $this->slider->find($id);
    } 

    public function renew($id, $array)
    {
            $this->findById($id)->update($array);
    } 

    public function remove($id)
    {
    		$this->findById($id)->delete();
    } 
}