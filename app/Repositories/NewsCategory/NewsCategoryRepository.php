<?php 

namespace App\Repositories\NewsCategory;

use App\Model\Ncategory;

class NewsCategoryRepository implements NewsCategoryInterface
{
    public function __construct(Ncategory $category)
    {
    		$this->category = $category;
    } 

    public function all()
    {
    		return $this->category->all();
    } 

    // public function save($array)
    // {
    // 		$categoryship = $this->category->create($array);
    //         if (isset($array['mcategory_id'])) {
    //             $categoryship->mcategorys()->attach($array['mcategory_id']);
    //         }
    // } 

    // public function findById($id)
    // {
    // 		return $this->category->find($id);
    // } 

    // public function renew($id, $array)
    // {
    //         $this->findById($id)->update($array);
    // } 

    // public function remove($id)
    // {
    // 		$this->findById($id)->delete();
    // } 
}