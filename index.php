<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP - Advance Practice
        </title>
    </head>
<body>
<?php

function br(){

    echo "</Br>";
}

class Car{
    public $color;
    public $model;

    public function __construct($Color, $Model){
        $this->color = $Color;
        $this->model = $Model;
    }
    public function message(){
        return "My car is a ".$this->color." ".$this->model;
    }

}
$car;
$myCar = new Car("Red","Volvo");
echo $myCar->message();

$car2 = new Car("Yellow","BMW");


br();
$msg = $car2->message();


$hello = "Hello";
echo $msg;
br();
echo strrev($msg);
br();
echo strrev($hello);
br();
?>

</body>
</html>