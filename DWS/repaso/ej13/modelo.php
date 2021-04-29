<?php
class Productos{
    protected $peso;
    protected $precio;
    protected $stock;

    function __construct($peso, $precio, $stock)
    {
        $this->peso = $peso;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    function asignar($peso, $precio, $stock){
        $array = array(
            "peso" => $peso,
            "precio" => $precio,
            "stock" => $stock
        );
        return $array;
    }

    function __get($var)
    {
        return $this->$var;
    }
}

class Monitores extends Productos{
    private $pulgadas;

    function __construct($peso, $precio, $stock, $pulgadas)
    {
        parent::__construct($peso, $precio, $stock);
        $this->pulgadas = $pulgadas;
    }

    function asignar2($peso, $precio, $stock, $pulgadas)
    {
        parent::asignar($peso, $precio, $stock);
        $array = array(
            "pulgadas" => $pulgadas
        );
        return $array;
    }

    function __get($var)
    {
        return $this->$var;
    }
}

class Discoduro extends Productos{
    private $capacidad;

    function __construct($peso, $precio, $stock, $capacidad){
        parent::__construct($peso, $precio, $stock);
        $this->capacidad = $capacidad;
    }

    function asignar3()
    {
        
    }

    function __get($var)
    {
        return $this->$var;
    }
}