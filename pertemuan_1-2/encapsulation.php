<?php 
class Buku{
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setJudul($judul){
        $this->judul = $judul;
    }
}

$buku1 = new Buku("Pemrograman PHP", "Andi Praseyo");
echo $buku1->getJudul();
?>