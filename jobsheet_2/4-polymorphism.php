<?php 
// membuat class Pengguna
class Pengguna{
    public function __construct(){}
    // metode aksesFitur untuk pengguna
    public function aksesFitur()
    {
        return "akses fitur pengguna" . PHP_EOL;
    }
}

// membuat class Dosen mewarisi class pengguna
class Dosen extends Pengguna{
    public function __construct(){}
    // metode aksesFitur untuk Dosen
    public function aksesFitur()
    {
        return "akses fitur dosen" . PHP_EOL;
    }
}

// membuat class Mahasiswa mewarisi class pengguna
class Mahasiswa extends Pengguna{
    public function __construct(){}
    // metode aksesFitur untuk Mahasiswa
    public function aksesFitur()
    {
        return "akses fitur mahasiswa" . PHP_EOL;
    }
}

// Instalasi Objek class Pengguna, Dosen, dan Mahasiswa
$coba = [new Pengguna(), new Dosen(), new Mahasiswa()];
foreach ($coba as $akses) {
    echo $akses->aksesFitur();
}
?>