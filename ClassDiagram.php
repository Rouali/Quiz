<?php
class Animal
{
    private $family;
    private $food;
    public function __construct($family, $food)
    {
        $this->family = $family;
        $this->food = $food;
    }
    public function get_family()
    {
        return $this->family;
    }
    public function set_family($family)
    {
        $this->family = $family;
    }
    public function get_food()
    {
        return $this->food;
    }
    public function set_food($food)
    {
        $this->food = $food;
    }
}
class Cow extends Animal
{
    private $owner;
    // public function __construct($family, $food)
    // {
    //     $this->family = $family;
    //     $this->food = $food;
    // }
    public function set_owner($owner)
    {
        $this->owner = $owner;
    }
    public function get_owner()
    {
        return $this->owner;
    }
}
class Lion extends Animal
{
    // public function __construct($family, $food)
    // {
    //     $this->family = $family;
    //     $this->food = $food;
    // }

}


interface Person
{
    public function greet();
}

class English implements Person
{
    public function greet()
    {
        echo "Hello";
    }
}
class German implements Person
{
    public function greet()
    {
        echo "Hallo";
    }
}
class French implements Person
{
    public function greet()
    {
        echo "Bonjour";
    }
}


$person = new English();
echo $person->greet();
echo '<br>';
echo '<br>';

$person = new German();
echo $person->greet();
echo '<br>';
echo '<br>';

$person = new French();
echo $person->greet();
echo '<br>';
echo '<br>';

$animal = new Animal('mammals','weed');

echo $animal->get_family();
echo '<br>';
echo $animal->get_food();
echo '<br>';
echo '<br>';
$animal = new Cow('mammals','water');

echo $animal->get_family();
echo '<br>';
echo $animal->get_food();

echo '<br>';
echo '<br>';
$animal = new Lion('mammals','meat');

echo $animal->get_family();
echo '<br>';
echo $animal->get_food();
echo '<br>';