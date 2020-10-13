<?php 

namespace App\Repositories\Link;

use App\Model\Link;

class LinkRepository implements LinkInterface
{
    public function __construct(Link $link)
    {
    		$this->link = $link;
    } 

    public function all()
    {
    		return $this->link->orderBy('created_at','desc')->get();
    } 

    public function save($array)
    {
    		$this->link->create($array);
    } 

    public function findById($id)
    {
    		return $this->link->find($id);
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