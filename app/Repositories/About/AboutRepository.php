<?php 

namespace App\Repositories\About;

use App\Model\About;

class AboutRepository implements AboutInterface
{
    public function __construct(About $slider)
    {
    		$this->slider = $slider;
    } 

    public function all()
    {
    		return $this->slider->all();
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