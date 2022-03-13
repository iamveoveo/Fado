<?php

class TagController extends BaseController{

    public function __construct(){
        $this->loadModel('TagModel');
        $this->TagModel = new TagModel;
    }

    public function index(){
        $this->add();
        $tags   = $this->TagModel->show();
        $bigTag = $this->TagModel->getBigTag($limit='18446744073709551615');

        return $this->view('admin.tag.index', $data = [
            'tags'      => $tags,
            'bigTag'    => $bigTag,
        ]);
    }

    public function add(){
        if(isset($_POST['add_tag'])){
            $data1 = [
                'TagID'         => $_POST['TagID'],
                'TagName'       => $_POST['TagName'],
                'TagDes'        => $_POST['TagDes'],
                'BigTag'        => $_POST['BigTag'],
                'TagTrending'   => $_POST['TagTrending']
            ];

            $completed = $this->TagModel->add($data1);

            if ($completed):    $_SESSION['alert'] = "<span class='text-success'>Thêm bản ghi thành công</span>";
            else:               $_SESSION['alert'] = "<span class='text-danger'>Thêm bản ghi không thành công</span>";
            endif;

            header('location: ' . SITEURL . '?controller=tag');
        }
    }

    public function remove(){
        if(isset($_GET['id'])){
            $completed  = $this->TagModel->remove($_GET['id']);
            
            if ($completed):    $_SESSION['alert'] = "<span class='text-success'>Xóa bản ghi thành công</span>";
            else:               $_SESSION['alert'] = "<span class='text-danger'>Xóa bản ghi không thành công</span>";
            endif;

            header('location: ' . SITEURL . '?controller=tag');
        }else{
            header('location: ' . SITEURL . '?controller=tag');
        }
    }

    public function modify(){
        if(isset($_GET['id'])){
            if(isset($_POST['modify_tag'])){
                $data = [
                    'TagName'       => $_POST['TagName'],
                    'TagDes'        => $_POST['TagDes'],
                    'BigTag'        => $_POST['BigTag'],
                    'TagTrending'   => $_POST['TagTrending']
                ];

                $completed = $this->TagModel->modify($_POST['TagID'], $data);

                if ($completed):    $_SESSION['alert'] = "<span class='text-success'>Sửa bản ghi thành công</span>";
                else:               $_SESSION['alert'] = "<span class='text-danger'>Sửa bản ghi không thành công</span>";
                endif;
            }

            $tag   = $this->TagModel->getByOption($option   = ['TagID'  => $_GET['id']]);
            $bigTag = $this->TagModel->getBigTag($limit='18446744073709551615');

            return $this->view('admin.tag.update', $data    = [
                'tag'       => $tag,
                'bigTag'    => $bigTag
            ]);
        }else{
            header('location: ' . SITEURL . '?controller=tag');
        }        
    }

}

?>