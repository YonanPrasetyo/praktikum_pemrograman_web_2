<?php 
class Dosen{
    public $nama;
    public $nip;
    public $mataKuliah;

    public function __construct($nama, $nip, $mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    public function tampilkanDosen(){
        return "nama dosen: $this->nama, nip: $this->nip, mata kuliah: $this->mataKuliah";
    }
}

$dosen = new Dosen("Prih Diantoro Abda'u", "123456789", "Praktikum Pemrograman Web 2");
echo $dosen->tampilkanDosen();
?>