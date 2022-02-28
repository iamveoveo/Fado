<?php
session_start();

require 'core/Database.php';
require 'models/BaseModel.php';
require 'controllers/BaseController.php';

$controller = isset($_GET['c']) ? strtolower($_GET['controller']) : 'home';

$action = isset($_GET['action']) ? strtolower($_GET['action']) : 'index';

$controller = ucfirst($controller);
$fileController = $controller . "Controller.php";
$pathController = "controllers/$fileController";

if (!file_exists($pathController)) {
    die("Trang bạn tìm không tồn tại");
}
require_once "$pathController";
$classController = $controller."Controller";
$object = new $classController();

if (!method_exists($object, $action)) {
    die("Phương thức $action
     không tồn tại trong class $classController");
}
$object->$action();
?>