<?php 

namespace App\Repositories\Funding;

use App\Model\Funding;

class FundingRepository implements FundingInterface
{
    public function __construct(Funding $funding)
    {
    		$this->funding = $funding;
    } 

    public function all()
    {
    		return $this->funding->all();
    } 

    public function save($array)
    {
    		$this->funding->create($array);
    } 

    public function findById($id)
    {
    		return $this->funding->find($id);
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