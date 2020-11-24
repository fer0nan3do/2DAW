<?php
class Imagen
{
    private $tmp_name;
    private $name;
    private $type;
    function __construct($tmp_name, $name, $type)
    {
        $this->tmp_name = $tmp_name;
        $this->name = $name;
        $this->type = $type;
    }
    function esta_cargado($tmp_name)
    {

    }
    function cambiar_nombre($name)
    {
        $this->name = $name;
        return $name;
    }
    function mover($tmp_name, $name, $type)
    {

    }
}
