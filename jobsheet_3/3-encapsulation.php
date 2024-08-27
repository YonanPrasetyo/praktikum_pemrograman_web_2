<?php 
// membuat class person
class Person{
    // atribut name
    protected $name;

    // construct untuk inisialisasi name
    public function __construct($name){
        $this->name = $name;
    }

    // metode getName
    public function getName(){
        return "Namanya adalah ".$this->name;
    }

    // metode setName
    public function setName($name){
        $this->name = $name;
    }
}

// membuat class student yang mewarisi class person
class Student extends Person{
    // atribut studentID
    private $studentID;

    // construct untuk inisialisasi studentID
    public function __construct($name, $studentID){
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // metode getName untuk student
    public function getName(){
        return "student id ". $this->studentID . $this->name;
    }

    // metode getStudentID
    public function getStudentID(){
        return $this->studentID;
    }

    // metode setStidentID
    public function setStudentID($studentID){
        $this->studentID = $studentID;
    }
}

// membuat teacher student yang mewarisi class person
class Teacher extends Person{
    // atribut teacherID
    public $teacherID;

    // construct untuk inisialisasi teacherID
    public function __construct($name, $teacherID){
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    // metode getName untuk teacher
    public function getName(){
        return "teacher id ". $this->teacherID . $this->name;
    }
}

// Instalasi Objek class Student dan Teacher
$person = new Student("Yonan Prasetyo", "230102023");
echo $person->setStudentID("123456654321");
echo $person->setName("Yonan 2");
echo $person->getName();
?>