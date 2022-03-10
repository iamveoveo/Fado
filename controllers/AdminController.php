<?php

class AdminController extends BaseController{

    public function __construct(){

    }

    public function index(){
        return $this->view('admin.index');
    }

}

?>