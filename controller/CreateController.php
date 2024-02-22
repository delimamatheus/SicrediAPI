<?php

require_once '../class/SignatureAPI.php';

class CreateController {
    private $signatureAPI;

    public function __construct($token){
        $this->signatureAPI = new SignatureAPI($token);
    }

    public function createDocument(){
        return true;
    }

}