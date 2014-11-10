<?php

namespace PayU;


use PayU\Libs\HttpCurlClient;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PaymentRequest
 *
 * @author mayank
 */
class PaymentRequest {
    
    private $client;
    
    private $url;
    
    public function __construct() {
        $this->client = new HttpCurlClient;
        $this->url = Config::URL.'/_payment';
    }
    
    public function init() {
        
        $this->client->init();
        $this->client->setUrl( $this->url );
    }
    
    public function create($data) {
        $this->client->setData($data);
    }
    
    public function execute(){
        $this->client->execute();
        $this->client->close();
        return $this->client->getResult();
    }
    
    
}
