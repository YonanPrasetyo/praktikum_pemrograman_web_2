<?php 
// membuat class Pengguna
abstract class Pengguna{
    public function __construct(){}
    // metode aksesFitur untuk pengguna
    abstract public function aksesFitur(): string;
}

// membuat class Dosen mewarisi class Pengguna
class Dosen extends Pengguna{
    public function __construct(){}
    // metode aksesFitur untuk dosen
    public function aksesFitur(): string
    {
        return "akses fitur dosen" . PHP_EOL;
    }
}

// membuat class Mahasiswa mewarisi class Pengguna
class Mahasiswa extends Pengguna{
    public function __construct(){}
    // metode aksesFitur untuk mahasiswa
    public function aksesFitur(): string
    {
        return "akses fitur mahasiswa" . PHP_EOL;
    }
}

// Instalasi Objek class Dosen dan Mahasiswa
$coba = [new Dosen(), new Mahasiswa()];
foreach ($coba as $akses) {
    echo $akses->aksesFitur();
}
?>