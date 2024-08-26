<?php 
class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

    public function tampilkanData(){
        return "Nama: $this->nama, nim $this->nim, jurusan $this->jurusan";
    }
}

$mahasiswa = new Mahasiswa();
$mahasiswa->nama = "Yonan Prasetyo";
$mahasiswa->nim = "230102023";
$mahasiswa->jurusan = "Teknik Informatika";
echo $mahasiswa->tampilkanData();
?>