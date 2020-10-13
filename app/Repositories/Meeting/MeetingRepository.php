<?php 

namespace App\Repositories\Meeting;

use App\Model\Meeting;

class MeetingRepository implements MeetingInterface
{
    public function __construct(Meeting $meeting)
    {
    		$this->meeting = $meeting;
    } 

    public function all()
    {
    		return $this->meeting->all();
    } 

    public function save($array)
    {
    		$this->meeting->create($array);
    } 

    public function findById($id)
    {
    		return $this->meeting->find($id);
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