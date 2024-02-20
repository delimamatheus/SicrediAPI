<?php

require_once '../class/SignatureAPI.php';

$method = $_SERVER['REQUEST_METHOD'];

switch($method){
    case 'POST':
        try {
            $token = TOKEN;
            $api = new SignatureAPI($token);

            if(isset($_FILES['json']) && $_FILES['json']['error'] === UPLOAD_ERR_OK){
                $temporaryFile = $_FILES['json']['tmp_name'];

                $result = $api->upload($temporaryFile);

                http_response_code(200);
                echo $result;
            }else{
                http_response_code(400);
                echo json_encode(array('Error' => 'JSON File not sended.'));
            }
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(array('Error'=> 'Internal server error!'));
        }
        break;
}