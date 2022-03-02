<?php

class HomeController extends BaseController{

    public function __construct(){
        $this->loadModel('ManufactureModel');
        $this->loadModel('ProductModel');
        $this->loadModel('TagModel');
        $this->ManufactureModel = new ManufactureModel;
        $this->ProductModel = new ProductModel;
        $this->TagModel = new TagModel;
    }

    public function index(){
        $manu_list = $this->ManufactureModel->show();
        $prodByVou = $this->ProductModel->showByDiscount(10);
        $tagTrend  = $this->TagModel->getByTrending();
        $prodByTag = $this->ProductModel->getByTag($tagTrend[0]['TagID']);
    
        return $this->view('home.index', $data = [
            "manufacture"   => $manu_list,
            "prodByVou"     => $prodByVou,
            "tagTrend"      => $tagTrend,
            "prodByTag"     => $prodByTag
        ]);
    }
}

?>