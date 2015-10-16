<?php

class Mechanic
{
	private $id;	
	private $name;
	private $surname;
	private $phone;
	
	public function __($id,$name,$surname,$phone)
	{
		$this->id = $id;
		$this->name = $name;
		$this->surname = $surname;
		$this->phone = $phone;
	}
}

?>