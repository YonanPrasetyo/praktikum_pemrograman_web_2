<?php 
// membuat class Dosen
class Dosen{
    // atribut nama, nip, dan mataKuliah
    public $nama;
    public $nip;
    public $mataKuliah;

    // constructor untuk class Mahasiswa untuk menginisialisasi atribut nama, nim, jurusan
    public function __construct($nama, $nip, $mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    // metode tampilkanDosen
    public function tampilkanDosen(){
        return "nama dosen: $this->nama, nip: $this->nip, mata kuliah: $this->mataKuliah";
    }
}

// inisialisasi objek dari class Dosen
$dosen = new Dosen("Prih Diantoro Abda'u", "123456789", "Praktikum Pemrograman Web 2");
echo $dosen->tampilkanDosen();
?>