<?php

class TagController extends BaseController{

    public function __construct(){
        $this->loadModel('TagModel');
        $this->TagModel = new TagModel;
    }

    public function index(){
        if(isset($_POST['add_tag'])){
            $data1 = [
                'TagID'         => $_POST['TagID'],
                'TagName'       => $_POST['TagName'],
                'TagDes'        => $_POST['TagDes'],
                'BigTag'        => $_POST['BigTag'],
                'TagTrending'   => isset($_POST['TagTrending']) ? $_POST['TagTrending'] : ''
            ];

            $completed = $this->TagModel->add($data1);

            if ($completed):    $_SESSION['alert'] = "<span class='text-success'>Thêm bản ghi thành công</span>";
            else:               $_SESSION['alert'] = "<span class='text-danger'>Thêm bản ghi không thành công</span>";
            endif;

            header('location: ' . SITEURL . '?controller=tag');
        }

        $tags   = $this->TagModel->show();
        $bigTag = $this->TagModel->getBigTag($limit='18446744073709551615');

        return $this->view('admin.tag.index', $data = [
            'tags'      => $tags,
            'bigTag'    => $bigTag,
        ]);
    }

}

?>