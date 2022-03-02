<?php
const SITEURL = 'http://localhost:8000/Fado/';

class database {

    const DB_HOST = 'localhost';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
    const DB_NAME = 'fado';

    public function connectDb(){
        $connect = mysqli_connect(self::DB_HOST, self::DB_USERNAME, self::DB_PASSWORD, self::DB_NAME);

        mysqli_set_charset($connect, 'utf8');
        if(mysqli_connect_error() == 0){
            return $connect;
        }
        return false;
    }

}

function view($path, $data = array()) {
    foreach ($data as $key => $val){
        $$key = $val;
    }
    
    require ('views' . '/' . str_replace('.', '/', $path) .'.php');
}
?>