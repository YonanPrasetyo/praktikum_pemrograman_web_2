<?php 
class Buku{
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function tampilkanInfo(){
        return "Judul: $this->judul, Penulis: $this->penulis";
    }
}

$buku1 = new Buku("Pemrograman PHP", "Andi Praseyo");
echo $buku1->tampilkanInfo();
?>