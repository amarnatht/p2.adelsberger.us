<?php

class Person{

	private $_name;
	private $_job;
	private $_age;

	public function __construct($name, $job, $age){

		$this-> _name = $name;
		$this-> _job = $job;
		$this-> _age - $age;
	}
	 public function changeJob($newjob){

	  	$this->_job = $newjob;
	 }

	 publib function happyBirthday(){

	 	++$this->_age;
	 }
}

//Create new people

$person1 = new Person("Tom", "Button Pusher", 34);
$person2 = new Person("John", "Lever Puller", 41);

//Output out their starting point

echo "<pre> Person 1: ". print_r($person1, TRUE). "</pre>";
echo "<pre> Person 2: ". print_r($person2, TRUE). "</pre>";

//Give Tom a promotion and a birthday
$person1->changeJob("Box Mover");
$person1->happyBirthday();

//John gets a year older
$preson2->happyBirthday();

//Output ending values
echo "<pre> Person 1: ".print_r($person1, TRUE). "</pre>";
echo "<pre> Person 2; ".print_r($person2, TRUE). "</pre>";
?>
