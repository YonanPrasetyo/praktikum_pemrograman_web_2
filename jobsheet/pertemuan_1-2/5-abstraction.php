<?php 
abstract class Pengguna{
    public function __construct(){

    }
    abstract public function aksesFitur(): string;
}

class Dosen extends Pengguna{
    public function __construct(){
        
    }
    public function aksesFitur(): string
    {
        return "akses fitur dosen" . PHP_EOL;
    }
}

class Mahasiswa extends Pengguna{
    public function __construct(){
        
    }
    public function aksesFitur(): string
    {
        return "akses fitur mahasiswa" . PHP_EOL;
    }
}

$coba = [new Dosen(), new Mahasiswa()];
foreach ($coba as $akses) {
    echo $akses->aksesFitur();
}
?>