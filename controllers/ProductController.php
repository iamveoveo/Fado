<?php

class ProductController extends BaseController{

    public function __construct(){
        $this->loadModel('ProductModel');
    }

    public function index(){
        $this->view('home.index');
    }

}

?>