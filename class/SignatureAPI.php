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

    public function create($requestData){
        $url = BASE_URL.'create';

        $headers = array( 
            'Token: ' . $this->token
        );

        $context = stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'header' => implode('\r\n', $headers),
                'content' => json_encode($requestData)
            )
        ));

        $response = file_get_contents($url, false, $context);

        if ($response === false){
            throw new Exception('Requisition error: ' . error_get_last()['message']);
        }

        return $response;
    }

    public function download($key, $includeOriginal, $includeManifest, $zipped){
        $url = BASE_URL.'package?key='.$key.'&includeOriginal='.$includeOriginal.'&includeManifest='.$includeManifest.'&zipped='.$zipped;

        $headers = array( 
            'Token: ' . $this->token
        );

        $context = stream_context_create(array(
            'http' => array(
                'method' => 'GET',
                'header' => implode('\r\n', $headers),
            )
        ));

        $response = file_get_contents($url, false, $context);

        if ($response === false){
            throw new Exception('Requisition error: ' . error_get_last()['message']);
        }

        return $response;
    }
}