<?php
class contadores
{
    private $cont1;
    private $cont2;
    private $cont3;

    public function __construct($cont1, $cont2, $cont3)
    {
        $this->cont1 = $cont1;
        $this->cont2 = $cont2;
        $this->cont3 = $cont3;
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

    public function getcont2()
    {
        return $this->cont2;
    }
      
    public function setcont2($cont2)
    {
        $this->cont2 = $cont2;

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
}
