<?php 

namespace App\Repositories\Member;

use App\Model\Member;

class MemberRepository implements MemberInterface
{
    public function __construct(Member $member)
    {
    		$this->member = $member;
    } 
    public function all($limit=null)
    {
    		return $this->member->orderBy('created_at','desc')->limit($limit)->get();
    } 

  

    public function save($array)
    {
    		$membership = $this->member->create($array);
            if (isset($array['mtype_id'])) {
                $membership->mtypes()->attach($array['mtype_id']);
            }
    } 

    public function findById($id)
    {
    		return $this->member->find($id);
    } 

    public function renew($id, $array)
    {
            $this->findById($id)->update($array);
             if (isset($array['mtype_id'])) {
                $this->findById($id)->mtypes()->sync($array['mtype_id']);
            }
    } 

    public function remove($id)
    {
            $this->findById($id)->mtypes()->detach();
            $this->findById($id)->delete();
    } 

    public function getPositions()
    {
            $item =  $this->member->pluck('position','position')->unique();
            $item['Chief Executive Officer'] = 'Chief Executive Officer (CEO)';
            return $item;
    } 
}