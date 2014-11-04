<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Payment
 *
 * @author mayank
 */
class Payment {
    
    private $key;
    
    private $hash;
    
    private $transactionId;
    
    private $amount;
    
    private $productInfo;
    
    private $firstName;
    
    private $emailId;
    
    private $udf1;
    
    private $udf2;
    
    private $udf3;
    
    private $udf4;
    
    private $udf5;
    
    private $udf6;
    
    private $udf7;
    
    private $udf8;
    
    private $udf9;
    
    private $udf10;
    
    public function getKey() {
        return $this->key;
    }

    public function getTransactionId() {
        return $this->transactionId;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getProductInfo() {
        return $this->productInfo;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getEmailId() {
        return $this->emailId;
    }

    public function getUdf1() {
        return $this->udf1;
    }

    public function getUdf2() {
        return $this->udf2;
    }

    public function getUdf3() {
        return $this->udf3;
    }

    public function getUdf4() {
        return $this->udf4;
    }

    public function getUdf5() {
        return $this->udf5;
    }

    public function getUdf6() {
        return $this->udf6;
    }

    public function getUdf7() {
        return $this->udf7;
    }

    public function getUdf8() {
        return $this->udf8;
    }

    public function getUdf9() {
        return $this->udf9;
    }

    public function getUdf10() {
        return $this->udf10;
    }
    
    public function getHash() {
        return $this->hash;
    }

    public function setKey($key) {
        $this->key = $key;
    }

    public function setTransactionId($transactionId) {
        $this->transactionId = $transactionId;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }

    public function setProductInfo($productInfo) {
        $this->productInfo = $productInfo;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setEmailId($emailId) {
        $this->emailId = $emailId;
    }

    public function setUdf1($udf1) {
        $this->udf1 = $udf1;
    }

    public function setUdf2($udf2) {
        $this->udf2 = $udf2;
    }

    public function setUdf3($udf3) {
        $this->udf3 = $udf3;
    }

    public function setUdf4($udf4) {
        $this->udf4 = $udf4;
    }

    public function setUdf5($udf5) {
        $this->udf5 = $udf5;
    }

    public function setUdf6($udf6) {
        $this->udf6 = $udf6;
    }

    public function setUdf7($udf7) {
        $this->udf7 = $udf7;
    }

    public function setUdf8($udf8) {
        $this->udf8 = $udf8;
    }

    public function setUdf9($udf9) {
        $this->udf9 = $udf9;
    }

    public function setUdf10($udf10) {
        $this->udf10 = $udf10;
    }
    
    public function setHash($hash) {
        $this->hash = $hash;
    }
    
    public function addProductInfo( $product ) {
        $productArray = json_decode( $this->productInfo );
        $productArray[] = $product;
        $this->productInfo = json_encode( $productArray );
    }
    
    public function toArray() {
        return array(
            'key'           => $this->key,
            'hash'          => $this->hash,
            'txnid'         => $this->transactionId,
            'amount'        => $this->amount,
            'productinfo'   => $this->productInfo,
            'firstname'     => $this->firstName,
            'email'         => $this->emailId,
            'udf1'          => $this->udf1,
            'udf2'          => $this->udf2,
            'udf3'          => $this->udf3,
            'udf4'          => $this->udf4,
            'udf5'          => $this->udf5,
            'udf6'          => $this->udf6,
            'udf7'          => $this->udf7,
            'udf8'          => $this->udf8,
            'udf9'          => $this->udf9,
            'udf10'          => $this->udf10,
        );
    }
    
    
}
