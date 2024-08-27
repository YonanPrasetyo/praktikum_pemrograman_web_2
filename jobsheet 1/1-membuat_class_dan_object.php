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
        return "\n Nama $this->nama \n Nim $this->nim \n Jurusan $this->jurusan";
    }
}

$mahasiswa = new Mahasiswa("Yonan Prasetyo", "230102023", "Teknik Informatika");
echo $mahasiswa->tampilkanData();
?>