<?php 
// membuat class person
class Person{
    // atribut name
    public $name;

    // construct untuk inisialisasi name
    public function __construct($name){
        $this->name = $name;
    }

    // metode getName
    public function getName(){
        return "Namanya adalah ".$this->name;
    }
}

// membuat class student yang mewarisi class person
class Student extends Person{
    // atribut studentID
    public $studentID;

    // construct untuk inisialisasi studentID
    public function __construct($name, $studentID){
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // metode getName untuk student
    public function getName(){
        return "student id ". $this->studentID;
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
        return "teacher id ". $this->teacherID;
    }
}

// Instalasi Objek class Student dan Teacher
$person = [new Student("Yonan Prasetyo", "230102023"), new Teacher("Prih Diantoro Abda'u", "1234567890")];
foreach ($person as $key) {
    echo $key->getName();
}

?>