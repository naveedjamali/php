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

function show($content){
    br();
    echo $content;
    
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
$word = 'naveed';
$line = 'Hello naveed, how are you?';
echo "position of $word in string '$line' is ".strpos($line, $word);
br();
echo str_replace($word, "Jamali", $line);
// show (is_int(PHP_INT_MAX));
// show(PHP_INT_MIN);
// show(PHP_INT_SIZE);
$d = var_dump(is_int($line));
echo is_int($word);

show($d==NULL);

?>

</body>
</html>