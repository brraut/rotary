<?php 

namespace App\Repositories\Event;

use App\Model\Event;
use Carbon\Carbon;

class EventRepository implements EventInterface
{
    public function __construct(Event $event)
    {
    		$this->event = $event;
    } 

    public function all($limit = null)
    {
        
    	  	return $this->event->orderBy('created_at','desc')->limit($limit)->get();

    } 

    public function paginate($count)
    {
            return $this->event->orderBy('created_at','desc')->paginate($count);
    } 

    public function save($array)
    {
    		$this->event->create($array);
    } 

    public function findById($id)
    {
            return $this->event->find($id);
    }  

    public function findBySlug($slug)
    {
    		return $this->event->where('slug',$slug)->first();
    } 

    public function renew($id, $array)
    {
            $this->findById($id)->update($array);
    } 

    public function remove($id)
    {
    		$this->findById($id)->delete();
    } 
    public function otherEvents($id, $limit = null)
    {
            return $this->event->where('id','!=',$id)->limit($limit)->get();
    } 

    public function upcomingEvents($limit = null)
    {       
            return $this->event->where('start_date', '>', Carbon::now())->orderBy('start_date','desc')->limit($limit)->get();
    } 

    public function upcomingEventsPagination($count)
    {
            return $this->event->where('start_date', '>', Carbon::now())->orderBy('start_date','desc')->paginate($count);

    } 
}