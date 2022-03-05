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
        $manu_list      = $this->ManufactureModel->show();
        $prodByVou      = $this->ProductModel->showByDiscount(10);
        $tagTrend       = $this->TagModel->getByOption(['TagTrending' => 1]);
        $prodByTag      = $this->ProductModel->getByTag($tagTrend[0]['TagID']);
        $bigTag         = $this->TagModel->getBigTag(5);
        $tagInBigTag    = [];

        foreach ($bigTag as $row){
            $tagInBigTag[$row['TagID']] = $this->TagModel->getByOption(['BigTag' => $row['TagID']], 5);
        }
    
        return $this->view('home.index', $data = [
            "manufacture"   => $manu_list,
            "prodByVou"     => $prodByVou,
            "tagTrend"      => $tagTrend,
            "prodByTag"     => $prodByTag,
            "bigTag"        => $bigTag,
            "tagInBigTag"   => $tagInBigTag
        ]);
    }
}

?>