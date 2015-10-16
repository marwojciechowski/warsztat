<?php

class Repairs
{
	private $id;
	private $price;
	private $date;
	
	public function __construct($id,$price,$date)
	{
		$this->id=$id;
		$this->price=$price;
		$this->date=$date;
	}
	
}

?>