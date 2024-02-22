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

        // die(var_dump($url));

        $response = file_get_contents($url, false, $context);

        if($response == false) {
            throw new Exception('Requisiton failed!');
        }

        return $response;
        
    }
}