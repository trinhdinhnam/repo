<?php
class Animal{
    private $Height;
    private $weight;

    public function getHeight()
    {
        return $this->Height;
    }

    public function setHeight($Height)
    {
        $this->Height = $Height;
    }
    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
     public function An(){
        echo "Dong vat an thuc an";
     }
     public function chay()
     {
         echo "Dong vat chay";

     }
}
class Dog extends Animal{
    private $maulong;

    public function An(){
        echo "Cho an xuong";
    }
    public function chay()
    {
        echo"Cho chay voi van toc 60km/h";
    }
    public function Boi(){
        echo" Cho biet boi";
    }
}
class Bird extends Animal
{
    public function An()
    {
        echo " Chim an thoc";
    }

    public function Bay()
    {
        echo " Chim co the bay ";
    }

}
$d1= new Dog();
/*
$d1->setHeight(50);
$d1->setWeight(25);
echo "Loai cho co chieu cao: " . $d1->getHeight() . ", can nang la: " . $d1->getWeight() . "<br />";
echo $d1->An() . "<br />";
echo $d1->Chay() . "<br />";
echo $d1->Boi() . "<br />";*/

//Tính đa hình

$_a= new Animal();
$_a=&$d1;
$_a->An();



