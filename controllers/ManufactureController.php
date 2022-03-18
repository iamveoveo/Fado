<?php

class ManufactureController extends BaseController{

    public function __construct(){
        $this->loadModel('ManufactureModel');
        $this->ManufactureModel = new ManufactureModel;
    }

    public function index(){
        /* $this->add(); */
        $vouchers   = $this->ManufactureModel->show();

        return $this->view('admin.voucher.index', $data = [
            'vouchers'   => $vouchers
        ]);
    }

}

?>