<?php

// How to create classes and objects?

// Car is a class
class Car{
    // properties
    public $comp;
    public $color = "beige";
    public $hasSunRoof = true;

    //method / function
        public function hello(){
            return "beep";
        }
//

}

$bmw = new Car;

// echo $bmw->color;
// echo $bmw->color = 'blue';
echo $bmw->hello();

?>