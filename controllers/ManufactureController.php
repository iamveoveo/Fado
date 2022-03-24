<?php

class ManufactureController extends BaseController{

    public function __construct(){
        $this->loadModel('ManufactureModel');
        $this->ManufactureModel = new ManufactureModel;
    }

    public function index(){
        $this->add();
        $manu   = $this->ManufactureModel->show();

        return $this->view('admin.manufacture.index', $data = [
            'manu'   => $manu
        ]);
    }

    public function add(){
        if(isset($_POST['add_manu'])){
            $uploaded   = $this->upload_img($_POST['ManuID']);
            if ($uploaded){
                $data = [
                    'ManuID'        => $_POST['ManuID'],
                    'ManuName'      => $_POST['ManuName'],
                    'ManuCountry'   => $_POST['ManuCountry'],
                    'ManuDistance'  => $_POST['ManuDistance'],
                    'ManuLogo'      => $uploaded
                ];

                $completed = $this->ManufactureModel->add($data);

                if ($completed):    $_SESSION['alert'] = "<span class='text-success'>Thêm bản ghi thành công</span>";
                else:               $_SESSION['alert'] = "<span class='text-danger'>Thêm bản ghi không thành công</span>";
                endif;

                header('location: ' . SITEURL . '?controller=manufacture');
            }else{
                $_SESSION['alert'] = "<span class='text-danger'>Ảnh được tải lên không phù hợp</span>";
            }
        }
    }

    public function modify(){
        if(isset($_GET['id'])){
            if(isset($_POST['modify_manu'])){
                $data = [
                    'ManuName'      => $_POST['ManuName'],
                    'ManuCountry'   => $_POST['ManuCountry'],
                    'ManuDistance'  => $_POST['ManuDistance'],
                ];

                $completed = $this->ManufactureModel->modify($_GET['id'], $data);

                if ($completed):    $_SESSION['alert'] = "<span class='text-success'>Sửa bản ghi thành công</span>";
                else:               $_SESSION['alert'] = "<span class='text-danger'>Sửa bản ghi không thành công</span>";
                endif;
            }

            if (isset($_POST['modify_logo'])){
                $uploaded   = $this->upload_img($_POST['ManuID']);
                if ($uploaded){
                    $data = [
                        'ManuLogo'      => $uploaded
                    ];

                    $completed = $this->ManufactureModel->modify($_GET['id'], $data);

                    if ($completed):    $_SESSION['alert'] = "<span class='text-success'>Sửa bản ghi thành công</span>";
                    else:               $_SESSION['alert'] = "<span class='text-danger'>Sửa bản ghi không thành công</span>";
                    endif;
                }else{
                    $_SESSION['alert'] = "<span class='text-danger'>Ảnh được tải lên không phù hợp</span>";
                }
            }

            $manu    = $this->ManufactureModel->getByOption($option   = ['ManuID'  => $_GET['id']]);

            return $this->view('admin.manufacture.update', $data    = [
                'manu'       => $manu
            ]); 
        }else{
            header('location: ' . SITEURL . '?controller=manufacture');
        }        
    }

    public function remove(){
        if(isset($_GET['id'])){
            $completed  = $this->ManufactureModel->remove($_GET['id']);
            
            if ($completed):    $_SESSION['alert'] = "<span class='text-success'>Xóa bản ghi thành công</span>";
            else:               $_SESSION['alert'] = "<span class='text-danger'>Xóa bản ghi không thành công</span>";
            endif;

            header('location: ' . SITEURL . '?controller=manufacture');
        }else{
            header('location: ' . SITEURL . '?controller=manufacture');
        }
    }

}

?>