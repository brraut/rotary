<?php 

namespace App\Repositories\Contact;

interface ContactInterface
{
	public function all(); 
    public function save($array); 
    public function findById($id); 
    public function remove($id); 
}