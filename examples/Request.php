<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Request
 *
 * @author mayank
 */

$product1 = new Product;

$product1->setDescription('Product 1 Description');
$product1->setIsRequired(false);
$product1->setName('Product 1');
$product1->setValue( 1000 );

$product2 = new Product;

$product2->setDescription('Product 2 Description');
$product2->setIsRequired(true);
$product2->setName('Product 2');
$product2->setValue( 2000 );

$payment = new Payment;

$payment->setAmount( 1000 );
$payment->setEmailId('someone@xyz.com');
$payment->setFirstName('Someone');

$payment->addProductInfo($product1);
$payment->addProductInfo($product2);

$payment->setUdf1('test1');
$payment->setUdf2('test2');
$payment->setUdf3('test3');
$payment->setUdf4('test4');
$payment->setUdf5('test5');
$payment->setUdf6('test6');
$payment->setUdf7('test7');
$payment->setUdf8('test8');
$payment->setUdf9('test9');
$payment->setUdf10('test10');

$payu = new PayU;

$payu->createPaymentRequest( $payment );
$payu->processRequest();