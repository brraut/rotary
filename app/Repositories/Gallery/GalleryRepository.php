<?php


namespace App\Repositories\Gallery;

use App\Model\Gallery;

class GalleryRepository implements GalleryInterface
{
    public function __construct(Gallery $gallery)
    {
    		$this->gallery = $gallery;
    } 

    public function all()
    {
    		return $this->gallery->all();
    } 

    public function save($array)
    {
    		$this->gallery->create($array);
    } 

    public function findById($id)
    {
    		return $this->gallery->find($id);
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