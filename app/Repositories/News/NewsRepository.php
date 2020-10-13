<?php 

namespace App\Repositories\News;

use App\Model\Post;

class NewsRepository implements NewsInterface
{
    public function __construct(Post $post)
    {
    		$this->post = $post;
    } 

    public function paginate($count)
    {
            return $this->post->orderBy('created_at','desc')->paginate($count);
    } 
    
    public function all($limit=null)
    {
    		return $this->post->orderBy('created_at','desc')->limit($limit)->get();
    } 

    public function save($array)
    {
    		$this->post->create($array);
           
    } 

    public function findById($id)
    {
    		return $this->post->find($id);
    } 

    public function findBySlug($slug)
    {
            return $this->post->where('slug',$slug)->first();
    } 

    public function renew($id, $array)
    {
            $this->findById($id)->update($array);
           
    } 

    public function remove($id)
    {
            $this->findById($id)->delete();
    } 

    public function otherNews($id,$limit = null)
    {
            return $this->post->where('id','!=',$id)->limit($limit)->get();
    } 
}