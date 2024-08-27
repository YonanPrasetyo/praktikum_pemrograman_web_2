<?php 
// membuat class pengguna
class Pengguna{
    // artibut nama
    public $nama;

    // construct untuk atribut nama
    public function __construct($nama){
        $this->nama = $nama;
    }

    // metode get nama untuk mengambil nama
    public function getNama(){
        return $this->nama;
    }
}

// membuat class dosen mewarisi class pengguna
class Dosen extends Pengguna{
    // atribut mataKuliah
    public $mataKuliah;

    // construct untuk atribut mataKuliah
    public function __construct($nama, $mataKuliah){
        // memanggil construct pada class pengguna
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
}

// Instalasi Objek class Dosen
$dosen = new Dosen("Prih Diantoro Abda'u", "Pemrograman Web 2");
echo $dosen->getNama();
?>