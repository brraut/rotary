<?php 

namespace App\Repositories\Rotaract;

use App\Model\Rotaract;

class RotaractRepository implements RotaractInterface
{
    public function __construct(Rotaract $slider)
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