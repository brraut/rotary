<?php 

namespace App\Repositories\Resource;

use App\Model\Resource;

class ResourceRepository implements ResourceInterface
{
    public function __construct(Resource $resource)
    {
    		$this->resource = $resource;
    } 

    public function all()
    {
    		return $this->resource->orderBy('created_at','desc')->get();
    } 

    public function save($array)
    {
    		$this->resource->create($array);
    } 

    public function findById($id)
    {
    		return $this->resource->find($id);
    } 

    public function renew($id, $array)
    {
            $this->findById($id)->update($array);
    } 

    public function remove($id)
    {
    		$this->findById($id)->delete();
    } 

    public function confidential()
    {
            return $this->resource->where('isConfidential',1)->get();
    } 

    public function non_confidential()
    {
            return $this->resource->where('isConfidential',0)->get();  
    } 
}