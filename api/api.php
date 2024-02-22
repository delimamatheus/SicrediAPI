<?php

require_once '../class/SignatureAPI.php';
require_once '../controller/UploadController.php';
require_once '../controller/CreateController.php';

$token = TOKEN;

$route = $_GET['url'];
$string = explode('/', $route);
$action = end($string);

switch($action){
    case 'upload':
        $uploadController = new UploadController($token);
        $uploadController->uploadDocument();
        break;
    case 'create':
        $createController = new CreateController($token);
        $createController->createDocument();
        break;
    case 'DELETE':
        break;
    default:
        break;
}