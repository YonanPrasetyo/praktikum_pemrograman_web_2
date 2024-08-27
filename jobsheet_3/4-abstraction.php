<?php 
// membuat class abstrak Course
abstract class Course{
    // membuat metode abstrak getCourseDetails
    abstract public function getCourseDetails();
}

// membuat class OnlineCourse mewarisi class Course
class OnlineCourse extends Course{
    // metode getCourseDetail untuk class OnlineCourse
    public function getCourseDetails(){
        return "online course akan dilaksanakan lewat google meet" . PHP_EOL;
    }
}

// membuat class OfflineCourse mewarisi class Course
class OfflineCourse extends Course{
    // metode getCourseDetail untuk class OfflineCourse
    public function getCourseDetails(){
        return "offline course akan dilaksanakan lewat di gkb 2.1" . PHP_EOL;
    }
}

// Instalasi Objek class OnlineCourse dan OfflineCourse
$study = [new OnlineCourse, new OfflineCourse];
foreach ($study as $key) {
    echo $key->getCourseDetails();
}
?>