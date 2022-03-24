<?php

class ProductController extends BaseController{

    public function __construct(){
        $this->loadModel('ProductModel');
        $this->loadModel('ManufactureModel');
        $this->loadModel('TagModel');
        $this->ProductModel     = new ProductModel;
        $this->ManufactureModel = new ManufactureModel;
        $this->TagModel         = new TagModel;
    }

    public function index(){
        $this->add();

        $prod   = $this->ProductModel->show();
        $manu   = $this->ManufactureModel->show();
        return $this->view('admin.product.index', $data = [
            'prod'  => $prod,
            'manu'  => $manu
        ]);
    }

    public function add(){
        if(isset($_POST['add_prod'])){
            $uploaded   = $this->upload_img($_POST['ProdID']);
            if ($uploaded){
                $data = [
                    'ProdID'        => $_POST['ProdID'],
                    'ProdName'      => $_POST['ProdName'],
                    'ProdStatus'    => $_POST['ProdStatus'],
                    'ProdPrice'     => $_POST['ProdPrice'],
                    'ProdInStock'   => $_POST['ProdInStock'],
                    'ManuID'        => $_POST['ManuID'],
                    'ProdImg'       => $uploaded
                ];
            }else{
                $data = [
                    'ProdID'        => $_POST['ProdID'],
                    'ProdName'      => $_POST['ProdName'],
                    'ProdStatus'    => $_POST['ProdStatus'],
                    'ProdPrice'     => $_POST['ProdPrice'],
                    'ProdInStock'   => $_POST['ProdInStock'],
                    'ManuID'        => $_POST['ManuID']
                ];
            }

            $completed = $this->ProductModel->add($data);

            if ($completed):    $_SESSION['alert'] = "<span class='text-success'>Thêm bản ghi thành công</span>";
            else:               $_SESSION['alert'] = "<span class='text-danger'>Thêm bản ghi không thành công</span>";
            endif;

            /* header('location: ' . SITEURL . '?controller=product'); */
            
        }
    }

    public function remove(){
        if(isset($_GET['id'])){
            $completed  = $this->ProductModel->remove($_GET['id']);
            
            if ($completed):    $_SESSION['alert'] = "<span class='text-success'>Xóa bản ghi thành công</span>";
            else:               $_SESSION['alert'] = "<span class='text-danger'>Xóa bản ghi không thành công</span>";
            endif;

            header('location: ' . SITEURL . '?controller=product');
        }else{
            header('location: ' . SITEURL . '?controller=product');
        }
    }

    public function modify_prod(){
        if (isset($_POST['modify_prod'])){
            $uploaded   = $this->upload_img($_POST['ProdID']);
            if ($uploaded){
                $data = [
                    'ProdName'      => $_POST['ProdName'],
                    'ProdStatus'    => $_POST['ProdStatus'],
                    'ProdPrice'     => $_POST['ProdPrice'],
                    'ProdInStock'   => $_POST['ProdInStock'],
                    'ManuID'        => $_POST['ManuID'],
                    'ProdImg'       => $uploaded
                ];
            }else{
                $data = [
                    'ProdName'      => $_POST['ProdName'],
                    'ProdStatus'    => $_POST['ProdStatus'],
                    'ProdPrice'     => $_POST['ProdPrice'],
                    'ProdInStock'   => $_POST['ProdInStock'],
                    'ManuID'        => $_POST['ManuID']
                ];
            }

            $completed = $this->ProductModel->modify($_GET['id'], $data);

            if ($completed):    $_SESSION['alert'] = "<span class='text-success'>Sửa bản ghi thành công</span>";
            else:               $_SESSION['alert'] = "<span class='text-danger'>Sửa bản ghi không thành công</span>";
            endif;
        }
    }

    public function modify_prod_detail(){
        if (isset($_POST['modify_prod_detail'])){
            $data = [
                'Series'        => $_POST['Series'],
                'Weight'        => $_POST['Weight'],
                'Dimension'     => $_POST['Dimension'],
                'Material'      => $_POST['Material'],
                'Color'         => $_POST['Color'],
                'ASIN'          => $_POST['ASIN'],    
                'UPC'           => $_POST['UPC'],
                'Description'   => $_POST['Description']
            ];

            $completed = $this->ProductModel->modify_detail($_GET['id'], $data);

            if ($completed):    $_SESSION['alert'] = "<span class='text-success'>Sửa chi tiết bản ghi thành công</span>";
            else:               $_SESSION['alert'] = "<span class='text-danger'>Sửa chi tiết bản ghi không thành công</span>";
            endif;
        }
    }

    public function modify_tag_prod(){
        if (isset($_POST['modify_tag_prod'])){
            $data = [
                'TagID' => $_POST['TagID']
            ];

            $completed = $this->TagModel->modifyTagProd($prodID = $_GET['id'], $tagID = $_POST['old_tagID'], $data);

            if ($completed):    $_SESSION['alert'] = "<span class='text-success'>Sửa bản ghi thành công</span>";
            else:               $_SESSION['alert'] = "<span class='text-danger'>Sửa bản ghi không thành công</span>";
            endif;
        }
    }

    public function modify(){
        if (isset($_GET['id'])){
            $this->modify_prod();
            $this->modify_prod_detail();
            $this->modify_tag_prod();

            if (isset($_POST['add_tag_prod'])){
                $data   = [
                    'ProdID'    => $_GET['id'],
                    'TagID'     => $_POST['TagID']
                ];

                $completed = $this->TagModel->addTagProd($data);

                if ($completed):    $_SESSION['alert'] = "<span class='text-success'>Thêm bản ghi thành công</span>";
                else:               $_SESSION['alert'] = "<span class='text-danger'>Thêm bản ghi không thành công</span>";
                endif;
            }

            $prod       = $this->ProductModel->getByOption($option  = ['ProdID'  => $_GET['id']]);
            $prod_de    = $this->ProductModel->getDetailByOption($option    = ['ProdID'  => $_GET['id']]);
            $manu       = $this->ManufactureModel->show();
            $tag        = $this->TagModel->show();
            $tag_prod   = $this->TagModel->getByProd($option    = ['ProdID'  => $_GET['id']]);
            return $this->view('admin.product.update', $data    = [
                'prod'      => $prod,
                'prod_de'   => $prod_de,
                'tag'       => $tag,
                'tag_prod'  => $tag_prod,
                'manu'      => $manu
            ]); 
        }else{
            header('location: ' . SITEURL . '?controller=product');
        }

    }

}

?>