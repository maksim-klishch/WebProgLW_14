<?php

require __DIR__.'/ISayable.php';
require __DIR__.'/TShowImage.php';
require __DIR__.'/Animal.php';

abstract class Linnaeus extends Animal
{
    protected $name;
    protected $color;

    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getColor() : string
    {
        return $this->color;
    }
}

class MustelaErminea extends Linnaeus implements ISayable
{
    use TShowImage;

    public static $number;

    public function __construct(string $name, string $color)
    {
        self::$number++;
        parent::__construct($name, $color);
    }

    public function sayHello()
    {
        echo "<p>Я горностай $this->name. Колір мого забарвлення: $this->color</p>";
    }

    public function getDescription(): string
    {
        return "Неоцінений вид, занесений до Червоної книги України. В Україні горностай поширений скрізь, окрім Криму та степових приазовських районів Херсонської, Запорізької та Донецької областей.";
    }
}

$a0 = new MustelaErminea("Сніжок", "білий");
$a0->sayHello();

$a1 = new MustelaErminea("Барсик", "рудий");
$a1->setImage("MustelaErminea.jpg");
$a1->sayHello();
$a1->showImage();
echo "Коротко про мій вид: <br/>";
echo $a1->getDescription();

echo "<p>К-сть оголошених обʼєктів:";
echo MustelaErminea::$number;
echo "</p>";
?>