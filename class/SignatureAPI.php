<?php

require_once '../constant/Constant.php';

class SignatureAPI{
    private $token;

    public function __construct($token){
        $this->token = $token;
    }

    public function upload($json){
        $url = BASE_URL.'upload';

        $headers = array(
            'Content-Type: application/json',
            'Token: ' . $this->token
        );

        $content = file_get_contents($json);

        $context = stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'header' => implode('\r\n', $headers),
                'content' => $content
            )
        ));

        $response = file_get_contents($url, false, $context);

        if($response == false) {
            throw new Exception('Requisiton failed!');
        }

        return $response;
        
    }
}