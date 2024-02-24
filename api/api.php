<?php

require_once '../constant/Constant.php';
require_once '../class/SignatureAPI.php';
require_once '../controller/UploadController.php';
require_once '../controller/CreateController.php';
require_once '../controller/DownloadController.php';

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
        $requestData = file_get_contents('php://input');

        if(!empty($requestData)){
            $createController = new CreateController($token);

            try{
                $response = $createController->createDocument($requestData);
                echo $response;
            }catch(Exception $e){
                echo 'Error: ' . $e->getMessage();
            }            
        }else{
            echo 'Error: null body';
        }
        break;
    case 'download':
        $downloadController = new DownloadController($token);

        $queryString = $_SERVER['REQUEST_URI'];

        parse_str(parse_url($queryString, PHP_URL_QUERY), $params);

        $key = $params['key'];
        $includeOriginal = $params['includeOriginal'];
        $includeManifest = $params['includeManifest'];
        $zipped = $params['zipped'];

        if(!empty($key) && !empty($includeOriginal) && !empty($includeManifest) && !empty($zipped)){
            try{
                $response = $downloadController->downloadDocument($key, $includeOriginal, $includeManifest, $zipped);

                echo $response;
            }catch(Exception $e){
                echo 'Error: ' . $e->getMessage();
            }            
        }else{
            echo 'Error sending params';
        }        
        break;
    default:
        break;
}