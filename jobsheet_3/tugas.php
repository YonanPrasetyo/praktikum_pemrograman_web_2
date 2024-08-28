<?php 
// membuat class person
class Person{
    // atribut name
    protected $name;

    // construct untuk inisialisasi name
    public function __construct($name){
        $this->name = $name;
    }

    // metode getName untuk mendapatkan name
    public function getName(){
        return "namanya adalah ".$this->name;
    }

    // metode getName untuk mendapatkan role
    public function getRole(){
        return "fungsi mengambil role";
    }
}

// membuat class dosen yang mewarisi class person
class Dosen extends Person{
    // atribut nidn
    private $nidn;

    // construct untuk inisialisasi nidn
    public function __construct($name, $nidn){
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    // metode getNidn untuk mengubah nilai nidn
    public function setNidn($nidn){
        $this->nidn = $nidn;
    }

    // metode getNidn untuk mengambil nilai nidn
    public function getNidn(){
        return "nidnnya adalah ".$this->nidn;
    }

    // metode getRole untuk mendapatkan role dari class dosen
    public function getRole(){
        return "saya adalah dosen";
    }
}

// membuat class mahasiswa yang mewarisi class person
class Mahasiswa extends Person{
    // atribut nim
    private $nim;

    // construct untuk inisialisasi nim
    public function __construct($name, $nim){
        parent::__construct($name);
        $this->nim = $nim;
    }

    // metode setNim untuk mengubah nilai nim
    public function setNim($nim){
        $this->nim = $nim;
    }

    // metode getNim untuk mengambil nilai nim
    public function getNim(){
        return "nimnya adalah ".$this->nim;
    }


    // metode getRole untuk mendapatkan role dari class mahasiswa
    public function getRole(){
        return "saya adalah mahasiswa";
    }
}

// membuat class jurnal
abstract class Jurnal{
    // metode pengajuan_jurnal
    abstract public function pengajuan_jurnal();
}

// membuat class jurnal dosen mewarisi class jurnal
class JurnalDosen extends Jurnal{
    // metode pengajuan_jurnal untuk jurnal dosen
    public function pengajuan_jurnal(){
        return "pengajuan jurnal dosen";
    }
}

// membuat class jurnal mahasiswa mewarisi class jurnal
class JurnalMahasiswa extends Jurnal{
    // metode pengajuan_jurnal untuk jurnal mahasiswa
    public function pengajuan_jurnal(){
        return "pengajuan jurnal mahasiswa";
    }
}

// Instalasi Objek class Dosen
$cek1 = new Dosen("Prih Diantoro Abda'u", "1234567890");
echo $cek1->getNidn(). PHP_EOL;
echo $cek1->getName(). PHP_EOL;
echo $cek1->getRole(). PHP_EOL;

// Instalasi Objek class Mahasiswa
$cek2 = new Mahasiswa("Yonan Prasetyo", "230102023");
echo $cek2->getNim(). PHP_EOL;
echo $cek2->getName(). PHP_EOL;
echo $cek2->getRole(). PHP_EOL;

// Instalasi Objek class JurnalDosen
$cek3 = new JurnalDosen();
echo $cek3->pengajuan_jurnal(). PHP_EOL;

// Instalasi Objek class JurnalMahasiswa
$cek4 = new JurnalMahasiswa();
echo $cek4->pengajuan_jurnal(). PHP_EOL;
?>