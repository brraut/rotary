<?php 

namespace App\Repositories\Contact;

use App\Model\Contact;

class ContactRepository implements ContactInterface
{
    public function __construct(Contact $contact)
    {
    		$this->contact = $contact;
    } 

    public function all()
    {
    		return $this->contact->all();
    } 

    public function save($array)
    {
    		return $this->contact->create($array);
    } 

    public function findById($id)
    {
    		return $this->contact->find($id);
    } 


    public function remove($id)
    {
    		$this->findById($id)->delete();
    } 
}