<?php

class VoucherController extends BaseController{

    public function __construct(){
        $this->loadModel('VoucherModel');
        $this->VoucherModel = new VoucherModel;
    }

    public function index(){
        $this->add();
        $vouchers   = $this->VoucherModel->getAllVoucher();

        return $this->view('admin.voucher.index', $data = [
            'vouchers'   => $vouchers
        ]);
    }

    public function add(){
        if(isset($_POST['add_voucher'])){
            $data = [
                'VouID'     => $_POST['VouID'],
                'VouName'   => $_POST['VouName'],
                'Discount'  => $_POST['Discount'],
                'StartTime' => $_POST['StartTime'],
                'EndTime'   => $_POST['EndTime'],
                'VouDes'    => $_POST['VouDes'],
                'ProdID'    => $_POST['ProdID']
            ];

            $completed = $this->VoucherModel->add($data);

            if ($completed):    $_SESSION['alert'] = "<span class='text-success'>Thêm bản ghi thành công</span>";
            else:               $_SESSION['alert'] = "<span class='text-danger'>Thêm bản ghi không thành công</span>";
            endif;

            header('location: ' . SITEURL . '?controller=voucher');
        }
    }

    public function modify(){
        if(isset($_GET['id'])){
            if(isset($_POST['modify_voucher'])){
                $data = [
                    'VouName'   => $_POST['VouName'],
                    'Discount'  => $_POST['Discount'],
                    'StartTime' => $_POST['StartTime'],
                    'EndTime'   => $_POST['EndTime'],
                    'VouDes'    => $_POST['VouDes'],
                    'ProdID'    => $_POST['ProdID']
                ];

                $completed = $this->VoucherModel->modify($_GET['id'], $data);

                if ($completed):    $_SESSION['alert'] = "<span class='text-success'>Sửa bản ghi thành công</span>";
                else:               $_SESSION['alert'] = "<span class='text-danger'>Sửa bản ghi không thành công</span>";
                endif;
            }

            $voucher    = $this->VoucherModel->getByOption($option   = ['VouID'  => $_GET['id']]);

            return $this->view('admin.voucher.update', $data    = [
                'voucher'       => $voucher
            ]);
        }else{
            header('location: ' . SITEURL . '?controller=voucher');
        }        
    }

    public function remove(){
        if(isset($_GET['id'])){
            $completed  = $this->VoucherModel->remove($_GET['id']);
            
            if ($completed):    $_SESSION['alert'] = "<span class='text-success'>Xóa bản ghi thành công</span>";
            else:               $_SESSION['alert'] = "<span class='text-danger'>Xóa bản ghi không thành công</span>";
            endif;

            header('location: ' . SITEURL . '?controller=voucher');
        }else{
            header('location: ' . SITEURL . '?controller=voucher');
        }
    }

}

?>