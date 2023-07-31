<?php

class Meja{
    public $warna;
    protected $merk;
    private $tinggi;

 public function __construct( $merk, $tinggi) {
    $this->merk = $merk;
    $this->tinggi= $tinggi;
}
public function __destruct() {
    echo "Meja ini berwarna {$this->warna} memiliki merk {$this->merk} dan Memiliki tinggi {$this->tinggi} <br>";
}
function set_Meja($warna)
{
    $this->warna = $warna;
}
function get_Meja() 
{
    return "Meja ini tidak terlalu berat";
}
public function all() {
    echo " <br>Warna: {$this->warna}<br>Merk: {$this->merk}<br>Tinggi: {$this->tinggi} <br>";
}

 }
 

 class Kursi extends Meja{

    private $berat;

    function __construct($merk,$tinggi) {
     parent :: __construct($merk, $tinggi);
    }

    public function __destruct() {
        echo "Kursi ini berwarna {$this->warna} memiliki merk {$this->merk} dan Memiliki berat {$this->berat} <br>";
    }
    function set_Kursi($warna,$berat) {
        $this->warna = $warna;
        $this->berat = $berat;
    }
    function get_Kursi() {
        return "Kursi ini tidak terlalu berat";
    }
 }
 


$Meja = new Meja("SAPPORO YORK", "90 cm <br>");
$Meja->set_Meja("Silver");
echo "{$Meja->get_Meja()}";
$Meja->all();

echo "<br>";

$Kursi = new Kursi ("Vortex", "50 cm <br>");
$Kursi->set_Kursi("Biru", "27kg");
echo "{$Kursi->get_Kursi()}";
$Kursi->all();

echo "<br>";
?>
