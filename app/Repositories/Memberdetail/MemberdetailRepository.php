<?php 

namespace App\Repositories\Memberdetail;

use App\Model\Memberdetail;

class MemberdetailRepository implements MemberdetailInterface
{
    public function __construct(Memberdetail $slider)
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