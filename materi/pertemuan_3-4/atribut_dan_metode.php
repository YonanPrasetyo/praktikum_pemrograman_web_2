<?php  
class Buku{
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function tampilkanInfo(){
        return "Buku: $this->judul, ditulis oleh $this->penulis";
    }
}

$buku = new Buku("Pemograman PHP", "John Doe");
echo $buku->tampilkanInfo();
?>