<?php

class BaseController {

    const VIEW_FOLDER = 'views';
    const MODEL_FOLDER = 'models';

    protected function view($path, array $data = [])
    {
        foreach ($data as $key => $val){
            $$key = $val;
        }

        require (self::VIEW_FOLDER . '/' . str_replace('.', '/', $path) .'.php');
    }

    protected function loadModel($model){
        require (self::MODEL_FOLDER . '/' . $model .'.php');
    }

    protected function upload_img($id){
        if(is_uploaded_file($_FILES["file_image"]["tmp_name"])){
            $target_dir = "assets/img/upload/";
            $target_file = $target_dir . basename($_FILES["file_image"]["name"]);
            $image_name = basename($_FILES["file_image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $newFileName = $id . date("Ymdhisa") . "." . $imageFileType;
            $fullNewFileName = $target_dir . $newFileName;

            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["file_image"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                echo "error|Tệp không phải là một ảnh";
                $uploadOk = 0;
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["file_image"]["size"] > 5000000) {
                $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                $uploadOk = 0;
            }
                // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                return false;
            // if everything is ok, try to upload file
            } else {
                if(move_uploaded_file($_FILES["file_image"]["tmp_name"], $fullNewFileName)){
                    return $newFileName;
                }
            }
        }
    }

}

?>