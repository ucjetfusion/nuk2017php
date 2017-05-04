<?php

/**
 * Person short summary.
 *
 * Person description.
 *
 * @version 1.0
 * @author Bill
 */
class Person
{
    public $Name;
    public $Id;
    


    public function __construct($name, $id) 
    {
        $this->Name = $name;
        $this->Id = $id;
    }
}