<?php 

namespace App\Repositories\Event;

interface EventInterface
{
	public function all($limit); 
	public function paginate($count); 
    public function save($array); 
    public function findById($id); 
    public function findBySlug($slug); 
    public function renew($id,$array); 
    public function remove($id); 
    public function otherEvents($id,$limit); 

    public function upcomingEvents($limit);
    public function upcomingEventsPagination($count);
}