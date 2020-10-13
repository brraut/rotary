<?php 

namespace App\Repositories\Image;

use App\Model\Image;

class ImageRepository implements ImageInterface
{
    public function __construct(Image $image)
    {
    		$this->image = $image;
    } 

    public function all()
    {
    		return $this->image->all();
    } 

    public function save($array)
    {
    		$this->image->create($array);
    } 

    public function findById($id)
    {
    		return $this->image->find($id);
    } 

    public function remove($id)
    {
    		$this->findById($id)->delete();
    } 
}