<?php

require_once '../class/SignatureAPI.php';

class UploadController {
    private $signatureAPI;

    public function __construct($token){
        $this->signatureAPI = new SignatureAPI($token);
    }

    public function uploadDocument(){  
        try {
            if(isset($_FILES['json']) && $_FILES['json']['error'] === UPLOAD_ERR_OK){
                $temporaryFile = $_FILES['json']['tmp_name'];

                $result = $this->signatureAPI->upload($temporaryFile);

                http_response_code(200);
                echo $result;
            }else{
                http_response_code(400);
                echo json_encode(array('Error' => 'JSON File not sended.'));
            }
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(array('Error'=> 'Internal server error!' . $e->getMessage()));
        }
    }

}