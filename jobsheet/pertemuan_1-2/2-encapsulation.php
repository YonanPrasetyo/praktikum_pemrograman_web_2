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

    public function getNama(){
        return $this->nama;
    }

    public function getNim(){
        return $this->nim;
    }

    public function getJurusan(){
        return $this->jurusan;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
}

$mahasiswa = new Mahasiswa("Yonan Prasetyo", "230102023", "Teknik Informatika");
echo $mahasiswa->setJurusan("Computer Sience");
echo $mahasiswa->getJurusan();
echo $mahasiswa->getNama();


?>