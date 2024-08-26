<?php 
class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData(){
        return "Nama: $this->nama, nim $this->nim, jurusan $this->jurusan";
    }
}

$mahasiswa = new Mahasiswa("Yonan Prasetyo", "230102023", "Teknik Informatika");
echo $mahasiswa->tampilkanData();
?>