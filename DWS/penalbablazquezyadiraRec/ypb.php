<?php
class Bd	
{
	private $link;
	function __construct()
	{
		if (!isset ($this->link)) {
			try{
				$this->link= new PDO("mysql:host=localhost;dbname=juegos", "root", "");
				$this->link->exec("set names utf8mb4");
			}
			catch(PDOException $e){
				$dato= "¡Error!: " . $e->getMessage() . "<br/>";
 				return $dato;
 				die();
 			}
 		}
	}
		
	function __get($var){
		return $this->$var;
	}
}

class Jugador
{

    private $nombre;   

    public function __construct($nombre ){
    
        $this->nombre = $nombre;
      
        
    }
        /*Getters y Setters*/
    public function __set($propiedad, $var){
        if(property_exists(__CLASS__, $propiedad)){
            $this->$propiedad = $var;
        }
    }
    public function __get($propiedad){
        if(property_exists(__CLASS__, $propiedad)){
            return $this->$propiedad;
        }
    }


    function insertar($link){
        try{
            $consulta="INSERT INTO jugadores VALUES (:idJugador, :Nombre, :Apellido, :Email, :Activo)";
            $result=$link->prepare($consulta);
            $nombre=$this->nombre;
            $vacio="";
            $result->bindParam(':idJugador',$vacio);
            $result->bindParam(':Nombre',$nombre);
            $result->bindParam(':Apellido',$vacio);
            $result->bindParam(':Email',$vacio);
            $result->bindParam(':Activo',$vacio);
            $result->execute();
            return $result;
        }
        catch(PDOException $e){
            $dato= "¡Error!: " . $e->getMessage() . "<br/>";
             return $dato;
             die();
         }
    }
 
    
}