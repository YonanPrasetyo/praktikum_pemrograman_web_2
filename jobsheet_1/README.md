# Jobsheet 1
## Kelas dan Objek dalam PHP
### Kelas (Class)
```php
class Mobil
```
Class adalah template atau blueprint yang mendefinisikan struktur dan perilaku dari objek, mencakup properti (atribut) dan metode yang dapat dimiliki.

### Objek (Object)
```php
$mobil = new Mobil;
```
Object adalah instance dari class, yang mewarisi semua atribut dan metode dari class tersebut dan dapat digunakan untuk memanipulasi data atau menjalankan fungsi tertentu.

## Atribut dan Metode
### Atribut (Attribute)
```php
public $warna;
private $merk;
Protected $tinggi;
```
Atribut adalah variabel yang didefinisikan dalam class, digunakan untuk menyimpan data atau status dari objek. \
jenis-jenis atribut
+ public: Atribut yang dapat diakses dari mana saja, baik dari dalam class, dari subclass (class turunan), maupun dari luar class.
+ private: Atribut yang hanya dapat diakses dari dalam class itu sendiri. Atribut ini tidak dapat diakses oleh cass turunan atau dari luar class.
+ protected: Atribut yang dapat diakses dari dalam class itu sendiri dan dari dalam class turunannya, tetapi tidak dari luar class.

### Metode (Method)
```php
public function tampilkanInfo(){
    return "warna $this->warna, merk $this->merk, tinggi $this->tinggi";
}
```
Metode adalah fungsi yang didefinisikan dalam class, yang digunakan untuk melakukan operasi atau tindakan pada objek.