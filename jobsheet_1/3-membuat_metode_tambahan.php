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

    // metode updateJurusan
    public function updateJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
}

// inisialisasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("Yonan Prasetyo", "230102023", "Teknik Informatika");
// mengubah jurusan
$mahasiswa->updateJurusan("RKS");
echo $mahasiswa->tampilkanData();
?>