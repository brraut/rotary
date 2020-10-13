<?php 

namespace App\Repositories\Member;

interface MemberInterface
{
	public function all($limit); 
    public function save($array); 
    public function findById($id); 
    public function renew($id,$array); 
    public function remove($id); 

    public function getPositions();
}