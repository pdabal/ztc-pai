<?php

class Fruit
{
    // Properties
    public $name;
    protected $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct()
    {
        echo "Destruct fruit is {$this->name} and color {$this->color}.<br/>";
    }

    // Methods
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }

    function set_color($color)
    {
        $this->color = $color;
    }
    final function get_color()
    {
        return $this->color;
    }

    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.<br/>";
    }
}

class Strawberry extends Fruit
{
    private $weight;

    function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function message()
    {
        echo "Am I a fruit or a berry? <br/>";
    }

    public function intro()
    {
        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.<br/>";
    }
}



$apple = new Fruit("Apple", "Red");
$banana = new Fruit("Banana", "Yellow");
$strawberry = new Strawberry("Strawberry", "Red", 50);

$strawberry->message();
$strawberry->intro();

$banana->intro();

echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
echo "<br>";
echo $banana->get_name();
echo "<br>";
echo var_dump($apple instanceof Fruit);
echo "<br>";
echo $apple->name . " "
    // . $apple->color . " " 
    // . $apple->weight  
    . "";
echo "<br>";
echo "<br>";

class Goodbye
{
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";

    function bye(){
        echo self::LEAVING_MESSAGE . "<br/>";
    }
}

echo Goodbye::LEAVING_MESSAGE. "<br/><br/>";
$goodbye = new Goodbye();
$goodbye->bye();
