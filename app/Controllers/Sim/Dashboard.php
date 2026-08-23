<?php


namespace App\Controllers\User;


use App\Controllers\BaseController;
use App\Libraries\GroceryCrud;

class Dashboard extends BaseController
{
    private  $crud;

    public function __construct()
    {
        $this->crud = new GroceryCrud();
        $this->crud->setTheme('enlink');
    }

    public function index()
    {
        return view('user/dashboard');
    }

    public function settings(): string
    {
        return view('user/settings');
    }


//    public function home()
//    {
////        $crud = new GroceryCrud();
//        $this->crud->setTable('actor');
//        $this->crud->setSubject('Actor', 'Actors');
//        $this->crud->columns(['actor_id','fullname','last_update']);
//
//        try {
//            $output = $this->crud->render();
////            echo "<pre>";
////            print_r($output);
////            echo "</pre>";
//            return $this->_exampleOutput($output);
//        } catch (\Exception $e) {
//            echo "<pre>";
//            print_r($e);
//            echo "</pre>";
////            return $this-
//        }
//
//
//
////        return view('la
//    }
//
//    private function _exampleOutput($output = null) {
//        return view('example', (array)$output);
//    }
//
//    public function edit($id) {
//        $this->crud->setTable('actor');
//        $this->crud->setSubject('Actor', 'Actors');
//        $output = $this->crud->render();
//        return $this->_exampleOutput($output);
////        echo "<pre>";
////        print_r($output);
////        echo "</pre>";
//    }
}
