<?php
class Person {
  private $name;
  private $email;
  private static $ageLimit = 40;

  public function __construct($name, $email) {
    $this->setName($name);
    $this->setEmail($email);
    echo __CLASS__." Created <br>";
  }

  public function __destruct() {
    echo __CLASS__." destroyed <br>";
  }

  public function getName() {
    return $this->name."<br>";
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getEmail() {
    return $this->email."<br>";
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public static function getAgeLimit() {
    return self::$ageLimit;
  }


}
# static props and method
//echo Person::$ageLimit."<br>";
echo Person::getAgeLimit()."<br>";

/// $person1 = new Person('John Doe', ' jdoe@gmail.com');
// echo $person1->getName();
// $person1->setName("John Doe");
// echo $person1->getName();
//$person1->name = 'John Doe';
//echo $person1->name;

class Customer extends Person {
  private $balance;

  public function __construct($name, $email, $balance) {
    parent::__construct($name, $email);
    $this->setBalance($balance);
    echo "A new ".__CLASS__.' has been created<br>';
  }

  public function getBalance() {
    return $this->balance."<br>";
  }

  public function setBalance($balance) {
    $this->balance = $balance;
  }
}

$customer1 = new Customer('John Doe', 'joe@gmail.com', 300);

echo $customer1->getBalance();
?>
