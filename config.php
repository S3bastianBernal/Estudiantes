<?php
require_once("db.php");

class Config{
    private $id;
    private $nombres;
    private $direccion;
    private $logros;
    private $especialidad;
    private $skills;
    private $ingles;
    private $ser;
    private $review;
    protected $dbCnx;

    public function __construct($id = 0, $nombres = "", $direccion = "", $logros = "", $skills = 0, $ingles = "", $ser = "", $review = 0, $especialidad = ""){
        $this->id = $id;
        $this->nombres = $nombres;
        $this->direccion = $direccion;
        $this->logros = $logros;
        $this->logros = $especialidad;
        $this->logros = $skills;
        $this->logros = $ingles;
        $this->logros = $ser;
        $this->logros = $review;
        $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function setID($id){
        $this->id=$id;
    }

    public function getID(){
        return $this->id;
    }

    public function setNombres($nombres){
        $this->nombres=$nombres;
    }

    public function getNombres(){
        return $this->nombres;
    }

    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function setLogros($logros){
        $this->logros=$logros;
    }

    public function getLogros(){
        return $this->logros;
    }

    public function setEspecialidad($especialidad){
        $this->especialidad=$especialidad;
    }

    public function getEspecialidad(){
        return $this->especialidad;
    }

    public function setSkills($skills){
        $this->skills=$skills;
    }

    public function getSkills(){
        return $this->skills;
    }

    public function setIngles($ingles){
        $this->ingles=$ingles;
    }

    public function getIngles(){
        return $this->ingles;
    }

    public function setSer($ser){
        $this->ser=$ser;
    }

    public function getSer(){
        return $this->ser;
    }

    public function setReview($review){
        $this->review=$review;
    }

    public function getReview(){
        return $this->review;
    }

    public function insertData(){
        try {
            $stm = $this-> dbCnx -> prepare("INSERT INTO camper (NOMBRES,direccion,logros,especialidad,skills,ingles,ser,review) values(?,?,?,?,?,?,?,?)");
            $stm -> execute([$this->nombres,$this->direccion,$this->logros,$this->especialidad,$this->skills,$this->ingles,$this->ser,$this->review]);
        } catch (Execption $e) {
            return $e->getMessage();
        }
        
    }

    public function selectAll(){
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM camper");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Execption $e) {
            return $e -> getMessage();
        }
    }

    public function delete(){
        try {
            $stm = $this->dbCnx->prepare("DELETE FROM camper WHERE id = ?");
            $stm -> execute([$this->id]);
            return $stm -> fetchAll();
            echo "<script>alert('Borrado Exitosamente');document.location='estudiantes.php'</script>";
        } catch (Execption $e) {
            return $e -> getMessage();
        }
    }



}




?>