<?php
class person{
	public $name;
	public $age;
	
	public function __construct($imam, $boyos){
		$this->name= $imam;
		$this->age=$boyos;
		
	}
	
	public function persondetails(){
		echo "The Name is :{$this->name} and Age is :{$this->age} ";
		
	}
	
}
$personone= new person("imam hossain", "23");
$personone->persondetails();
?>