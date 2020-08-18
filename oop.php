<?php


class Student {
	public $name;
	protected $id;
	private $cgpa;

	public function __construct($name, $id, $cgpa){
		$this->name =$name;
		$this->id =$id;
		$this->cgpa =$cgpa;
	}

	public function getName(){
		return $this->name;
	}

	public function getCgpa(){
		return $this->cgpa;
	}

	public function setName($name){
		return $this->name;
	}

	public function setCgpa($cgpa){
		return $this->cgpa;
	}
}


class CSStudent extends Student {
	//parent::__construct()

	protected $dept;

	public function __construct($dept, $name, $id){
		parent::__construct($name, $id, '22');
		$this->dept;
	} 

	public function getName(){
		return $this->name;
	}
}

$cs1 = new CSStudent('cs', 'name', '23');

echo $cs1->getName();



