<?php 

namespace App\Repositories\Resource;

interface ResourceInterface
{
	public function all(); 
    public function save($array); 
    public function findById($id); 
    public function renew($id,$array); 
    public function remove($id); 

    public function confidential();
    public function non_confidential();
   
}