<?php

	class person{
		
		public $name;
		public $age;
		
		public function personName(){
			echo "person name is:".$this->name."<br/>";
			
		}
		
		public function personAge($value){
			echo "person age is : ".$this->age=$value;
			
		}
	}
 $personone= new person;
 $personone->name="imam hossain";
 $personone->personName();
$personone->personAge("18");
?>

