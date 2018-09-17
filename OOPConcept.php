<?php

class Frank_Robbery
{
    var $id = 2334;
    var $name = "Frank";

    public function Display()
    {
        echo $this->id . "<br />";
        echo $this->name . "<br />";
    }
}

class Kelechi extends Frank_Robbery
{
    var $Model = "67hh687" . "<br />";
    var $foodBoy = "I love eating Pringles";

    public function KelechiEstate()
    {
        # code...
        echo $this->Model . "<br />";
        echo $this->foodBoy;
    }
}

    $lagos = new Frank_Robbery();
    $lagos->Display();

    $lagos1 = new Kelechi();
    $lagos1->KelechiEstate();
?>