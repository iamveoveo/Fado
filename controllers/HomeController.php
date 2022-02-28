<?php

class HomeController extends BaseController{

    public function __construct(){
        $this->loadModel('ManufactureModel');
        $this->loadModel('ProductModel');
        $this->ManufactureModel = new ManufactureModel;
        $this->ProductModel = new ProductModel;
    }

    public function index(){
        $manu_list = $this->ManufactureModel->show();
        $prodByVou = $this->ProductModel->showByDiscount(10);
    
        return $this->view('home.index', $data = [
            "manufacture"   => $manu_list,
            "prodByVou"     => $prodByVou
        ]);
    }
}

?>