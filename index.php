<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP - Advance Practice
        </title>
    </head>
<body>
<?php
class Car{
    public $color;
    public $model;

    public function __construct($Color, $Model){
        $this->color = $Color;
        $this->model = $Model;
    }
    public function message(){
        return "My car is a ".$this->color." ".$this->model."</BR>";
    }

}
$car;
$myCar = new Car("Red","Volvo");

echo $myCar->message();

$car2 = new Car("Yellow","BMW");
echo strlen($car2->message());
echo "</Br>";
echo str_word_count($car2->message());

echo "</Br>";
$car2 = NULL;

echo var_dump($car2)."</Br>";
echo var_dump($car2)."</Br>";
echo $car2->message();
?>

</body>
</html>