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
}

?>