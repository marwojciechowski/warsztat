<?php

class Customer
{
	private $id;	
	private $name;
	private $surname;
	private $phone;
	
	public function __construct($id, $name, $surname, $phone)
	{
		$this->id = $id;
		$this->name = $name;
		$this->surname = $surname;
		$this->phone = $phone;
	}
	
	
}

?>