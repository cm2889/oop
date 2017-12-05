<?php
class person{
	public $name;
	public $age;
	public $id;
	
	public function __construct($imam, $boyos){
		$this->name= $imam;
		$this->age=$boyos;
		
	}
	
	public function setID($id){
		$this->id=$id;
	}
	public function __destruct(){
		if(! empty ($this->id)){
			echo " saving person";
		}
	}
		
	}
	

$personone= new person("imam hossain", "23");
$personone->setId(23);
unset($personone);
?>