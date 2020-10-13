<?php 

namespace App\Repositories\Cause;

interface CauseInterface
{
	public function all($limit); 
    public function save($array); 
    public function findById($id); 
    public function renew($id,$array); 
    public function remove($id); 
}