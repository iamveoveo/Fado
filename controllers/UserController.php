<?php

class UserController extends BaseController{

    public function __construct(){
        $this->loadModel('UserModel');
        $this->UserModel = new UserModel;
    }

}

?>