<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('error_reporting', E_ALL);

class Persona{
    public $dni;
    public $nombre;
    public $edad;
    public $nacionalidad;

    public function setNombre($nombre){ $this->nombre = $nombre; }
    public function getNombre(){ return $this->nombre; }
    
    public function setDni($dni){ $this->dni; }
    public function getDni(){ return $this->dni; }
    
    public function setEdad($edad){ $this->edad; }
    public function getEdad(){ return $this->edad; }
    
    public function setNacionalidad($nacionalidad){ $this->nacionalidad; }
    public function getNacionalidad(){ return $this->nacionalidad; }
    
    public function imprimir(){
    }
    public function __destruct(){
        echo "Destruyendo el objeto: " . $this->nombre . "<br>";
    }
}
class Alumno extends Persona{
    
    public $legajo;
    public $notaPorfolio;
    public $notaPhp;
    public $notaProyecto;

    public function __construct($dni="", $nombre=""){
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->notaPorfolio = 0.0;
        $this->notaPhp = 0.0;
        $this->notaProyecto = 0.0;
    }
    public function __destruct(){
        echo "Destruyendo el objeto: " . $this->nombre . "<br>";
    }
    public function imprimir(){
        echo "Alumno: " . $this->nombre . "<br>";
        echo "Documentos: " . $this->dni . "<br>";
        echo "Notas PHP: " . $this->notaPhp . "<br>";
        echo "Notas Proyectos: " . $this->notaProyecto . "<br>";
        echo "Nota del Portfolio: " . $this->notaPortfolio . "<br><br>";
    }
    public function calcularPromedio(){

    }
}

class Docente extends Persona{
    public $especialidad ;

    const ESPECIALIDAD_WP = "wordprees";
    const ESPECIALIDAD_ECO = "Economia aplicada";
    const ESPECIALIDAD_BBDD = "Base de datos"; 

    public function __destruct(){
        echo "Destruyendo el objeto: " . $this->nombre . "<br>";
    }

    public function imprimir(){
        echo "Nombre del docente: " . $this->nombre . "<br>";
        echo "Especialidad: " . $this->especialidad . "<br>";
        
    }
    public function imprimirEspecialidadesHabilitadas(){
        echo "Especialides: <br>";
        echo self::ESPECIALIDAD_WP . "<br>";
        echo self::ESPECIALIDAD_ECO . "<br>";
        echo self::ESPECIALIDAD_BBDD. "<br>";
    }
}
    //Programa
    $alumno1 = new  Alumno("4958627","Javier Sosa");
    $alumno1->edad = 25;
    $alumno1->nacionalidad = "Argentina";
    $alumno1->notaPhp = 8;
    $alumno1->notaPortfolio = 9;
    $alumno1->notaProyecto = 8;
    $alumno1->imprimir();

    $alumno2 = new  Alumno("45026673","Fabian Bogado");
    $alumno2->edad = 18;
    $alumno2->nacionalidad = "Argentina";
    $alumno2->notaPhp = 0;
    $alumno2->notaPortfolio = 7;
    $alumno2->notaProyecto = 0.0;
    $alumno2->imprimir();

    $docente = new Docente();
    $docente->nombre = "Nelson Tarche";
    $docente->especialidad = Docente::ESPECIALIDAD_ECO ;
    $docente->imprimir();
    $docente->imprimirEspecialidadesHabilitadas();
?>