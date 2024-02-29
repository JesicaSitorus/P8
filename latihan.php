<?php
class Hewan {
    //properties
    public $nama;
    public $gerak;


        //methods
    function simpan_nama($nama){
        $this->nama = $nama;
    }
    function ambil_nama(){
        return $this-> nama;
    }
    function simpan_gerak($gerak){
          $this->gerak= $gerak;
    }
    function ambil_gerak(){
        return $this-> gerak;
    }
}

//untuk burung
$burung = new Hewan();
$burung->simpan_nama('Burung');
$burung->simpan_gerak('Terbang');


echo "Nama : " . $burung->ambil_nama();
echo "<br>";
echo "Gerak : " . $burung->ambil_gerak();
echo "<br>";
echo "<br>";

//untuk harimau
$harimau = new Hewan();
$harimau->simpan_nama('Harimau');
$harimau->simpan_gerak('Berlari');


echo "Nama : " . $harimau->ambil_nama();
echo "<br>";
echo "Gerak : " . $harimau->ambil_gerak();
echo "<br>";
echo "<br>";

//untuk ikan
$ikan= new Hewan();
$ikan->simpan_nama('Ikan');
$ikan->simpan_gerak('Berenang');


echo "Nama : " . $ikan->ambil_nama();
echo "<br>";
echo "Gerak : " . $ikan->ambil_gerak();
echo "<br>";
echo "<br>";

//untuk monyet
$monyet = new Hewan();
$monyet->simpan_nama('Monyet');
$monyet->simpan_gerak('Bergantung');


echo "Nama : " . $monyet->ambil_nama();
echo "<br>";
echo "Gerak : " . $monyet->ambil_gerak();
echo "<br>";
echo "<br>";

//untuk ular
$ular = new Hewan();
$ular->simpan_nama('Ular');
$ular->simpan_gerak('Melata');


echo "Nama : " . $ular->ambil_nama();
echo "<br>";
echo "Gerak : " . $ular->ambil_gerak();
echo "<br>";
echo "<br>";
?>


