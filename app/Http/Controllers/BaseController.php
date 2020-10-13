<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\Routing\getParameter;

class BaseController extends Controller
{
    protected function commonData($view_path)
    {
        View::composer($view_path, function($view){
            
            $view->with('dashboard_url',route('dashboard.dashboard'));
            $view->with('loggedInUser',auth()->user());
            $view->with('_base_route', property_exists($this, 'base_route')?$this->base_route:'');
            $view->with('_view_path', property_exists($this, 'view_path')?$this->view_path:'');
            $view->with('_panel', property_exists($this, 'panel')?$this->panel:'');
            $view->with('_folder', property_exists($this,'folder')?$this->folder:'');

           



        });
        return $view_path;
    }

    public function checkForDefaults($array)
    {
            foreach ($array as $key => $value) {
                
                if($value ==NULL){
                   
                     unset($array[$key]);
                }
            }
            return $array;
    } 

    public function loggedInUser()
    {
        return auth()->user();
    } 

     public function processImage($file,$setModel = null)
    {
        

        $file_name = rand(0,9999).'_'.$file->getClientOriginalName();

//      check for folder
        if(!file_exists(public_path($this->folder_path))){
                 mkdir(public_path($this->folder_path));
        }

//      checking done

//      remove old Image
        if(substr($file->getMimeType(), 0, 5) == 'image'){
            $this->deleteImage($setModel);
        }elseif(substr($file->getMimeType(), 0, 11) == 'application'){
            $this->deleteFile($setModel);
        }
        
//      remove old Image Done

        $file->move(public_path($this->folder_path),$file_name);
       

        return $file_name;
    } 

    public function deleteImage($setModel)
    {
        if(isset($setModel)){
            if($setModel->featured != null and file_exists(public_path().DIRECTORY_SEPARATOR.$this->folder_path.DIRECTORY_SEPARATOR.$setModel->featured)) {
                    unlink(public_path().DIRECTORY_SEPARATOR.$this->folder_path.DIRECTORY_SEPARATOR.$setModel->featured);
               }
        }
    } 

    public function deleteFile($setModel)
    {
            if(isset($setModel)){
                if($setModel->file != null and file_exists(public_path().DIRECTORY_SEPARATOR.$this->folder_path.DIRECTORY_SEPARATOR.$setModel->file)) {
                        unlink(public_path().DIRECTORY_SEPARATOR.$this->folder_path.DIRECTORY_SEPARATOR.$setModel->file);
                 }
        }
    } 
}
