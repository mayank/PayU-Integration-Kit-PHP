<?php

namespace PayU;

use PayU\Config\Config;
use PayU\Libs\Encryption;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PayU
 *
 * @author mayank
 */
class PayU {
 
    const HASH_DELIMITER = '|';
    const KEY_LENGTH = 20;
	const HASH_SEQUENCE = 'key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10';
    
    private $payment;
    
    private $hash;
    
    private $transactionId;

    public function createPaymentRequest( Payment $payment )
    {
        $this->payment = $payment;
        $this->paymentRequest = new PaymentRequest;
        
        $this->payment->setKey( Config::MERCHANT_KEY );
        
        $this->transactionId = $this->createTransactionId();
        $this->payment->setTransactionId( $this->transactionId );
        
        $this->hash = $this->createHash();
        $this->payment->setHash( $this->hash );
        
        $this->paymentRequest->init();
        $this->paymentRequest->create( $this->payment->toArray() );
       
    }
    
    public function processRequest() {
        return $this->paymentRequest->execute();
    }
    
    private function createTransactionId() {
        return Encryption::key( self::KEY_LENGTH, Encryption::SHA256 );
    }
    
    private function createHash() {
        $sequence = $this->createHashSequence();
        return Encryption::hash( $sequence, Encryption::SHA512 );
    }
    
    private function createHashSequence() {
        
        $hashSequenceArray = explode( self::HASH_DELIMITER, self::HASH_SEQUENCE );
		$toArray = $this->payment->toArray();
		$hashSequence = '';
		
		foreach( $hashSequenceArray as $hashKeys ){
			$hashSequence .= $toArray[ $hashKeys ] . self::HASH_DELIMITER;
		}
		
        $hashSequence .= Config::SALT;
 
        return $hashSequence;
    }
    
}
