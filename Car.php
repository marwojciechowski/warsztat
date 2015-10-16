<?php

class Car
{
	private $id;	
	private $make;
	private $model;
	private $trim;
	private $year;
	private $engine;
	
	public function __construct($id, $make, $model, $trim, $year, $engine)
	{
		$this->id = $id;
		$this->make = $make;
		$this->model = $model;
		$this->trim = $trim;
		$this->year = $year;
		$this->engine = $engine;
	}
	
	public function changeModel($model)
	{
		$this->model = $model;
	}
}

?>