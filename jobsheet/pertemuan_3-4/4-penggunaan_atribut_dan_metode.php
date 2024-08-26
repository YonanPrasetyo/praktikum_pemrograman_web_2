<?php 
class Mahasiswa{
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData(){
        return "Nama: $this->nama, nim $this->nim, jurusan $this->jurusan";
    }

    public function updateJurusan($jurusan){
        $this->jurusan = $jurusan;
    }

    public function setNim($nim){
        $this->nim = $nim;
    }
}

$mahasiswa = new Mahasiswa("Yonan Prasetyo", "230102023", "Teknik Informatika");
$mahasiswa->updateJurusan("RKS");
$mahasiswa->setNim("123456789");
echo $mahasiswa->tampilkanData();
?>