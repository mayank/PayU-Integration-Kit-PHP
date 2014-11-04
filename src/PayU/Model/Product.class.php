<?php

namespace PayU;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author mayank
 */
class Product {
   
    private $name;
    
    private $description;
    
    private $value;
    
    private $isRequired;
    
    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getValue() {
        return $this->value;
    }

    public function getIsRequired() {
        return $this->isRequired;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function setIsRequired($isRequired) {
        $this->isRequired = $isRequired;
    }


    
}
