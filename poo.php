<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('error_reporting', E_ALL);

class Persona{

    protected $dni;
    protected $nombre;
    protected $edad;
    protected $nacionalidad;

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
    private $legajo;
    private $notaPortfolio;
    private $notaPhp;
    private $notaProyecto;

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }

    public function __construct($dni="", $nombre=""){
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->notaPortfolio = 0.0;
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
    private $especialidad ;

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
    }

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
    $alumno1 = new  Alumno();
    $alumno1->setNombre("Javier Sosa");
    $alumno1->setDni("4958627");
    $alumno1->setEdad("25");
    $alumno1->setNacionalidad("Argentina");
    $alumno1->notaPhp = 8;
    $alumno1->notaPortfolio = 9;
    $alumno1->notaProyecto = 8;
    $alumno1->imprimir();
            //2
    $alumno2 = new  Alumno();
    $alumno2->setNOmbre("Fabian Bogado");
    $alumno2->setDni("45026673");
    $alumno2->setEdad("18");
    $alumno2->setNacionalidad("Argentina");
    $alumno2->notaPhp = 9;
    $alumno2->notaPortfolio = 7;
    $alumno2->notaProyecto = 9;
    $alumno2->imprimir();
            //3
    $docente = new Docente();
    $docente->nombre = "Nelson Tarche";
    $docente->especialidad = Docente::ESPECIALIDAD_ECO ;
    $docente->imprimir();
    $docente->imprimirEspecialidadesHabilitadas();
?>