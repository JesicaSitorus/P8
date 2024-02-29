<?php
class Fruit {
    //properties
    public $name;
    public $color;


        //methods
    function simpan_name($nama){
        $this->name = $nama;
    }
    function ambil_name(){
        return $this-> name;
    }
    function simpan_color($warna){
          $this->color= $warna;
    }
    function ambil_color(){
        return $this-> color;
    }
}

$apple = new Fruit();
$apple->simpan_name('Apple');
$apple->simpan_color('Red');
echo "Name : " . $apple->ambil_name();
echo "<br>";
echo "Color : " . $apple->ambil_color();
?>