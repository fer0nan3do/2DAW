<?php
class Bd	
{
	private $link;
	function __construct()
	{
		if (!isset ($this->link)) {
			try{
				$this->link= new PDO("mysql:host=localhost;dbname=casas", "root", "");
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

class Usuario
{

    private $cod_pob;   

    public function __construct($cod_pob ){
    
        $this->cod_pob = $cod_pob;
      
        
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


    function buscar($link){
        try{
            $query = "SELECT * FROM usuario where cod_pob ='$this->cod_pob'";
            $resultado= $link->prepare($query);
            $resultado->execute();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            $dato= "Error  ".$e->getMessage()."<br>";
            return $dato;
            die();
        }
        
    }
 
    
}