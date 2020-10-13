<?php 

namespace App\Repositories\News;

interface NewsInterface
{
	public function all($limit); 
	public function paginate($count); 
    public function save($array); 
    public function findById($id); 
    public function findBySlug($slug); 
    public function renew($id,$array); 
    public function remove($id); 
    public function otherNews($id,$limit); 
}