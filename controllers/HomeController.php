<?php

class HomeController extends BaseController{

    public function __construct(){
        $this->loadModel('ManufactureModel');
        $this->loadModel('ProductModel');
        $this->loadModel('TagModel');
        $this->loadModel('UserModel');
        $this->loadModel('DeliveryModel');
        $this->ManufactureModel = new ManufactureModel;
        $this->ProductModel     = new ProductModel;
        $this->TagModel         = new TagModel;
        $this->UserModel        = new UserModel;
        $this->DeliveryModel    = new DeliveryModel;
    }

    public function index(){
        $manu_list      = $this->ManufactureModel->show();
        $prodByVou      = $this->ProductModel->showByDiscount(10);
        $tagTrend       = $this->TagModel->getByOption(['TagTrending' => 1]);
        $prodByTag      = $this->ProductModel->getByTag($tagTrend[0]['TagID']);
        $bigTag         = $this->TagModel->getBigTag('5');
        $tagInBigTag    = [];
        $prodOfChildTag = [];

        foreach ($bigTag as $row){
            $tagInBigTag[$row['TagID']] = $this->TagModel->getByOption(['BigTag' => $row['TagID']], 5);
        };

        foreach ($tagInBigTag as $rows){
            foreach ($rows as $row){
                $prodOfChildTag[$row['TagID']] = $this->ProductModel->getByTag($row['TagID']);
            }
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
                if(password_verify($_POST['Password'], $loginAcc[0]['Password'])){
                    $_SESSION['logged'] = $loginAcc[0];
                    header('location: ' . SITEURL);
                }else{
                    $_SESSION['alert'] = "<span class='text-danger'>Sai m???t kh???u</span>";
                }
            }else{
                $_SESSION['alert'] = "<span class='text-danger'>Email ch??a ???????c ????ng k??</span>";
            }
        }

        if(isset($_POST['register'])){
            $_POST['Password'] = password_hash($_POST['Password2'], PASSWORD_DEFAULT);
            
            $data1 = [
                'name'      => $_POST['name'],
                'Address'   => $_POST['Address'],
                'Gender'    => $_POST['Gender'],
                'Birth'     => $_POST['Birth'],
                'Tel'       => $_POST['Tel']
            ];

            $data2 = [
                'UserEmail' => $_POST['UserEmail'],
                'Password'  => $_POST['Password'],
                'UserRole'  => 'Kh??ch h??ng'
            ];

            $suc = $this->UserModel->add($data1, $data2);

            if($suc){
                $_SESSION['alert'] = "<span class='text-success'>????ng k?? th??nh c??ng h??y ????ng nh???p b???ng t??i kho???n v???a ????ng k??</span>";
            }else{
                $_SESSION['alert'] = "<span class='text-danger'>????ng k?? th???t b???i vui l??ng th??? l???i</span>";
            }
        }

        return $this->view('home.login', $data = [
            'loginAcc'=>$loginAcc
        ]);
    }

    public function detail(){
        if(isset($_GET['id'])){
            $getTagOfProd   = $this->TagModel->getTagOfProd($_GET['id']);
            $prod           = $this->ProductModel->getByOption(['ProdID' => $_GET['id']], 1);
            $deliOfProd     = $this->DeliveryModel->getByOption(['ProdID' => $_GET['id']]);

            return $this->view('home.product-details', $data = [
                'getTagOfProd'  => $getTagOfProd,
                'prod'          => $prod,
                'deliOfProd'    => $deliOfProd
            ]);
        }else{
            header('location:' . SITEURL);
        }
    }

}

?>