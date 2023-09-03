<?php

class contadores
{
    private $cont1;
    private $cost1;
    private $cont2;
    private $cost2;
    private $cont3;
    private $cost3;

    private $nombre;
    private $edad;
    private $genero;


    public function __construct($cont1, $cost1, $cont2, $cost2, $cont3, $cost3)
    {
        $this->cont1 = $cont1;
        $this->cost1 = $cost1;
        $this->cont2 = $cont2;
        $this->cost2 = $cost2;
        $this->cont3 = $cont3;
        $this->cost3 = $cost3;
    }

    public function getcont1()
    {
        return $this->cont1;
    }
      
    public function setcont1($cont1)
    {
        $this->cont1 = $cont1;

        return $this;
    }

    public function getcost1()
    {
        return $this->cost1;
    }


    public function setcost1($cost1)
    {
        $this->cost1 = $cost1;

        return $this;
    }
    public function getcont2()
    {
        return $this->cont2;
    }
      
    public function setcont2($cont2)
    {
        $this->cont2 = $cont2;

        return $this;
    }

    public function getcost2()
    {
        return $this->cost2;
    }


    public function setcost2($cost2)
    {
        $this->cost2 = $cost2;

        return $this;
    }
    public function getcont3()
    {
        return $this->cont3;
    }
      
    public function setcont3($cont3)
    {
        $this->cont3 = $cont3;

        return $this;
    }

    public function getcost3()
    {
        return $this->cost3;
    }


    public function setcost3($cost3)
    {
        $this->cost3 = $cost3;

        return $this;
    }
}