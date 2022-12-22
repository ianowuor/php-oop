<?php

class Customer {
    // Access modifiers: public, private, protected

    // Properties 
    public $id;
    public $name;
    private $email;
    public $balance;
    protected $address = '124 Main Avenue';

    // Constructor: A special function that runs when you instantiate an object

    public function __construct ($id, $name, $email, $balance) {
        $this -> id = $id;
        $this -> name = $name;
        $this -> email = $email;
        $this -> balance = $balance;
    }

    // Methods: Functions within a class

    public function getEmail () {
        return $this -> email . '<br>';
    }

    // Destructor

    // public function __destruct () {
    //     echo 'Destructor Ran ... <br>';
    // }
}

// Customer instance

$customer = new Customer(50, 'Chris Fix', 'fixit@mailfix.com', 4000);

echo $customer -> id . '<br>';
echo $customer -> name . '<br>';
echo $customer -> balance . '<br>';

echo $customer ->getEmail() . '<br>';

// INHERITANCE: A class extends another class

class Subscriber extends Customer {
    // Properties
    public $plan;

    // Constructor
    public function __construct ($id, $name, $email, $balance, $plan) {
        // Run the parent constructor
        parent:: __construct($id, $name, $email, $plan);
        $this -> plan = $plan;
    }

    // Method
    public function getAddress () {
        return $this -> address;
    }
}

// Subscriber instance

$subscriber = new Subscriber(22, 'Chill Bill', 'bill@gmail.com', 1200, 'Premium');
echo $subscriber -> getEmail() . '<br>';

?>