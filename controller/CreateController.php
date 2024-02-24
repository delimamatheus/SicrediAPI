<?php

require_once '../class/SignatureAPI.php';

class CreateController {
    private $signatureAPI;

    public function __construct($token){
        $this->signatureAPI = new SignatureAPI($token);
    }

    public function createDocument($requestData){        
        try{
            $response = $this->signatureAPI->create($requestData);
            return $response;
        }catch(Exception $e){
            throw new Exception('Error creating document: ' . $e->getMessage());
        }
    }

}