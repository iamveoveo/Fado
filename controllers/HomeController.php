<?php

class HomeController extends BaseController{

    public function __construct(){
        $this->loadModel('ManufactureModel');
        $this->loadModel('ProductModel');
        $this->loadModel('TagModel');
        $this->loadModel('UserModel');
        $this->ManufactureModel = new ManufactureModel;
        $this->ProductModel     = new ProductModel;
        $this->TagModel         = new TagModel;
        $this->UserModel        = new UserModel;
    }

    public function index(){
        $manu_list      = $this->ManufactureModel->show();
        $prodByVou      = $this->ProductModel->showByDiscount(10);
        $tagTrend       = $this->TagModel->getByOption(['TagTrending' => 1]);
        $prodByTag      = $this->ProductModel->getByTag($tagTrend[0]['TagID']);
        $bigTag         = $this->TagModel->getBigTag(5);
        $tagInBigTag    = [];
        $prodOfChildTag = [];

        foreach ($bigTag as $row){
            $tagInBigTag[$row['TagID']] = $this->TagModel->getByOption(['BigTag' => $row['TagID']], 5);
        };

        foreach ($tagInBigTag as $row){
            $prodOfChildTag[$row[0]['TagID']] = $this->ProductModel->getByTag($row[0]['TagID']);
        }
    
        return $this->view('home.index', $data = [
            "manufacture"   => $manu_list,
            "prodByVou"     => $prodByVou,
            "tagTrend"      => $tagTrend,
            "prodByTag"     => $prodByTag,
            "bigTag"        => $bigTag,
            "tagInBigTag"   => $tagInBigTag,
            "prodOfChildTag"=> $prodOfChildTag,
        ]);
    }

    public function login(){
        $loginAcc = [];

        if(isset($_POST['login'])){
            $loginAcc   = $this->UserModel->getByOption($option = ['UserEmail' => $_POST['UserEmail']], $limit = 1);

            if(!empty($loginAcc)){
                if($loginAcc[0]['Password'] == $_POST['Password']){
                    $loginAcc = "một";
                }
            }
        }


        return $this->view('home.login', $data = [
            'loginAcc'=>$loginAcc
        ]);
    }

}

?>