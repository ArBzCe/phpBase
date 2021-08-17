<?php
Interface Beverage
{
    public function cost();
}

abstract class BeverageI implements Beverage
{
    public String $description = "";

    public function getDescription()
    {
        return $this->description;
    }
}

class Espresso extends BeverageI
{
    public function __construct()
    {
       $this->description .= "Espresso";
    }
    public function cost()
    {
       return 1.99;
    }
}

class HouseBlend extends BeverageI
{
    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
        $this->description .= "House Blend Coffee";
    }
    public function cost()
    {
       return .89+$this->beverage->cost();
    }
}

class Mocha extends BeverageI
{
    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
        $this->description .= "Mocha Coffee";
    }

    public function cost()
    {
        return .20+$this->beverage->cost();
    }
}

class DarkRoast extends BeverageI
{
    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
        $this->description .= "Dark Roast Coffee";
    }

    public function cost()
    {
        return .20+$this->beverage->cost();
    }
}

class Whip extends BeverageI
{
    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
        $this->description .= "Whip Coffee";
    }

    public function cost()
    {
        return .60+$this->beverage->cost();
    }
}

class Soy extends BeverageI
{
    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
        $this->description .= "Soy Coffee";
    }

    public function cost()
    {
        return .78+$this->beverage->cost();
    }
}



class Coffee
{
    public function run(){
        $beverage1 = new Espresso();
        echo $beverage1->getDescription()." $".$beverage1->cost().PHP_EOL;


        $beverage2 = new Mocha($beverage1);
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Whip($beverage2);
        echo $beverage2->getDescription()." $".$beverage2->cost().PHP_EOL;

        $beverage3 = new Soy($beverage2);
        $beverage3 = new Mocha($beverage3);
        $beverage3 = new Whip($beverage3);
        echo $beverage3->getDescription()." $".$beverage3->cost().PHP_EOL;

    }
}

$coffee = new Coffee();
$coffee->run();
