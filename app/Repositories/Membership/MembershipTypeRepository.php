<?php 

namespace App\Repositories\Membership;

use App\Model\Mtype;

class MembershipTypeRepository implements MembershipTypeInterface
{
    public function __construct(Mtype $type)
    {
    		$this->type = $type;
    } 

    public function all()
    {
    		return $this->type->all();
    } 

    // public function save($array)
    // {
    // 		$typeship = $this->type->create($array);
    //         if (isset($array['mtype_id'])) {
    //             $typeship->mtypes()->attach($array['mtype_id']);
    //         }
    // } 

    public function findById($id)
    {
    		return $this->type->find($id);
    } 

    // public function renew($id, $array)
    // {
    //         $this->findById($id)->update($array);
    // } 

    // public function remove($id)
    // {
    // 		$this->findById($id)->delete();
    // } 
}