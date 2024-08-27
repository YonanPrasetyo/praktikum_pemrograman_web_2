<?php 
// membuat class mahasiswa
class Mahasiswa{
    // atribut nama, nim, dan jurusan
    public $nama;
    public $nim;
    public $jurusan;

    // constructor untuk class Mahasiswa untuk menginisialisasi atribut nama, nim, jurusan
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // metode tampilkanData
    public function tampilkanData(){
        return "Nama: $this->nama, nim $this->nim, jurusan $this->jurusan";
    }
}

// inisialisasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("Yonan Prasetyo", "230102023", "Teknik Informatika");
echo $mahasiswa->tampilkanData();
?>