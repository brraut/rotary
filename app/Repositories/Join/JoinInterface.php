<?php 

namespace App\Repositories\Join;

interface JoinInterface
{
	public function all(); 
    public function save($array); 
    public function findById($id); 
    public function renew($id,$array); 
    public function remove($id); 
}