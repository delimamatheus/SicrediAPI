<?php

require_once '../class/SignatureAPI.php';

class DownloadController {
    private $signatureAPI;

    public function __construct($token){
        $this->signatureAPI = new SignatureAPI($token);
    }

    public function downloadDocument($key, $includeOriginal, $includeManifest, $zipped){
        try{
            $response = $this->signatureAPI->download($key, $includeOriginal, $includeManifest, $zipped);
            return $response;
        }catch(Exception $e){
            throw new Exception('Error downloading document: ' . $e->getMessage());
        }
    }

}