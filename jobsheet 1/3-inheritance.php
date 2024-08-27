<?php 
class Pengguna{
    public $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }
}

class Dosen extends Pengguna{
    public $mataKuliah;

    public function __construct($nama, $mataKuliah){
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
}

$dosen = new Dosen("Prih Diantoro Abda'u", "Pemrograman Web 2");
echo $dosen->getNama();
?>