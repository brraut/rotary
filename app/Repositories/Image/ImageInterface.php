<?php 

namespace App\Repositories\Image;

interface ImageInterface
{
	public function all(); 
    public function save($array); 
    public function findById($id); 
    public function remove($id); 
}