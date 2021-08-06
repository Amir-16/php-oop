<?php

	interface Shape {
	  public function calcArea();
	}

	class Circle implements Shape {
	  private $radius;

	  public function __construct($radius) {
	    $this->radius = $radius;
	      }

	  // calcArea বৃত্তের পরিধি গণনা করে
	  public function calcArea(){
	    echo $this->radius * $this->radius * pi();
	      }
	}

	class Rectangle implements Shape{
	  private $width;
	  private $height;

	  public function __construct($width, $height){
	    $this->width = $width;
	    $this->height = $height;
	  }

	  // calcArea আয়তক্ষেত্র পরিমাপ করবেে
		public function calcArea(){
      echo $this->width * $this->height;
          }
  }

  // অবজেক্ট তৈরি
  $circle = new Circle(10);
	$rectangle = new Rectangle(6,4);

  // আকৃতি পরিমাপ
	$circle->calcArea();
	echo "";
  $rectangle->calcArea();

?>