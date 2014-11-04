<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Encryption
 *
 * @author mayank
 */
class Encryption {
    
    const SHA256 = "sha256";
    const SHA512 = "SHA512";
    
    public static function key( $length, $algo ) {
        return substr( hash( $algo, mt_rand() . microtime() ), 0, $length );
    }
    
    public static function hash( $string, $algo ) {
        return strtolower( hash( $algo, $string ) );
    }
    
}
