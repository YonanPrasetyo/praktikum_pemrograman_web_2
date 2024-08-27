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
        return $this->name;
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
}

$student = new Student("Yonan Prasetyo", "230102023");
echo $student->getName();
?>