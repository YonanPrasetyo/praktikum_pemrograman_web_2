<?php 
class Pengguna{
    public function __construct(){

    }
    public function aksesFitur()
    {
        return "akses fitur pengguna" . PHP_EOL;
    }
}

class Dosen extends Pengguna{
    public function __construct(){
        
    }
    public function aksesFitur()
    {
        return "akses fitur dosen" . PHP_EOL;
    }
}

class Mahasiswa extends Pengguna{
    public function __construct(){
        
    }
    public function aksesFitur()
    {
        return "akses fitur mahasiswa" . PHP_EOL;
    }
}

$coba = [new Pengguna(), new Dosen(), new Mahasiswa()];
foreach ($coba as $akses) {
    echo $akses->aksesFitur();
}
?>