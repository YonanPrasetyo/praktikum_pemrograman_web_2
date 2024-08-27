<?php 
// membuat class mahasiswa
class Mahasiswa{
    // atribut nama, nim, dan jurusan
    public $nama;
    public $nim;
    public $jurusan;

    // metode tampil data
    public function tampilkanData(){
        return "Nama: $this->nama, nim $this->nim, jurusan $this->jurusan";
    }
}

// inisialisasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa();
// inisialisasi masing-masing atribut
$mahasiswa->nama = "Yonan Prasetyo";
$mahasiswa->nim = "230102023";
$mahasiswa->jurusan = "Teknik Informatika";
echo $mahasiswa->tampilkanData();
?>