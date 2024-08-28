# Jobsheet 3
## Encapsulation
```php
class Person{
    private $nama;

    public function getNama(){
        return $this->nama;
    }
}
```
Encapsulation adalah konsep pengamanan data di dalam objek dengan membatasi akses ke atribut dan metode menggunakan visibility (seperti public, private, dan protected), sehingga data hanya dapat dimanipulasi melalui metode tertentu.
## Inheritance
```php
class Animal{
    # code
}

class Cat extends Person{
    # code
}

class Dog extends Person{
    # code
}
```
Inheritance adalah mekanisme pewarisan di mana sebuah class (child class) dapat mewarisi atribut dan metode dari class lain (parent class), memungkinkan reuse kode dan pengorganisasian hierarki.
## Polymorphism
```php
class Animal{
    public function sound(){
        return "sound of animal";
    }
}

class Cat extends Person{
    public function sound(){
        return "meow";
    }
}

class Dog extends Person{
    public function sound(){
        return "guk guk";
    }
}
```
Polymorphism memungkinkan objek dari class yang berbeda untuk merespon dengan cara yang berbeda terhadap metode yang sama, biasanya diimplementasikan melalui metode override atau implementasi interface.
## Abstraction
```php
abstract class Animal{
    abstract public function sound();
}

class Cat extends Person{
    public function sound(){
        return "meow";
    }
}

class Dog extends Person{
    public function sound(){
        return "guk guk";
    }
}
```
Abstraction adalah konsep penyembunyian detail implementasi yang kompleks, dengan hanya menampilkan fungsi penting kepada pengguna, sering dicapai dengan menggunakan class abstract dan interface.