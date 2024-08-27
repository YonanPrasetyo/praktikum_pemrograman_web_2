<?php 
// membuat class mahasiswa
class Mahasiswa{

    // atribut nama, nim, dan jurusan
    private $nama;
    private $nim;
    private $jurusan;

    // construct untuk atribut nama, nim, jurusan
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // metode getter untuk atribut nama
    public function getNama(){
        return $this->nama;
    }

    // metode getter untuk atribut nim
    public function getNim(){
        return $this->nim;
    }

    // metode getter untuk atribut jurusan
    public function getJurusan(){
        return $this->jurusan;
    }

    // metode setter untuk atribut nama
    public function setNama($nama){
        $this->nama = $nama;
    }

    // metode setter untuk atribut nim
    public function setNim($nim){
        $this->nim = $nim;
    }

    // metode setter untuk atribut jurusan
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
}

// Instalasi Objek class Mahasiswa
$mahasiswa = new Mahasiswa("Yonan Prasetyo", "230102023", "Teknik Informatika");
// Demonstrasi akses artibut menggunakan setter dan getter
echo $mahasiswa->setJurusan("Computer Sience");
echo $mahasiswa->getJurusan();
echo $mahasiswa->getNama();


?>