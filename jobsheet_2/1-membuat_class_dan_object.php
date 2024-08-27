<?php 
// membuat class mahasiswa
class Mahasiswa{

    // atribut nama, nim, dan jurusan
    public $nama;
    public $nim;
    public $jurusan;

    // construct untuk atribut nama, nim, jurusan
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // membuat metode tampilkanData untuk menampilkan semua atribut
    public function tampilkanData(){
        return "\n Nama $this->nama \n Nim $this->nim \n Jurusan $this->jurusan";
    }
}

// Instalasi Objek class Mahasiswa
$mahasiswa = new Mahasiswa("Yonan Prasetyo", "230102023", "Teknik Informatika");
echo $mahasiswa->tampilkanData();
?>