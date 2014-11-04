<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HttpCurlClient
 *
 * @author mayank
 */
class HttpCurlClient {
    
    
    private $connection;
    private $result;
    
    public function init(){
        $this->connection = curl_init();
    }
    
    public function setUrl( $url ){
        curl_setopt( $this->connection, CURLOPT_URL, $url );
    }
    
    public function setData( $data ){
        curl_setopt($this->connection, CURLOPT_POST, 1);
        $params = $this->createParams( $data );
        curl_setopt($this->connection, CURLOPT_POSTFIELDS, $params);
    }
    
    public function execute() {
        $this->result = curl_exec ( $this->connection );
        return $this->result;
    }
    
    public function getResult() {
        return $this->result;
    }
    
    public function setTimeout() {
        curl_setopt ( $this->connection, CURLOPT_TIMEOUT, 60);
    }
    
    public function close() {
        curl_close ( $this->connection ); 
    }
    
    private function createParams( $data ) {
        return http_build_query( $data );
    }
}
