<?php
class Kendaraan
{
    var $jumlahRoda = 4;
    var $warna;
    var $bahanBakar = "Premium";
    var $harga = 100000000;
    var $merek;
    var $tahunPembuatan = 2004;
    function statusHarga()
    {
        if ($this->harga > 50000000) {
            $status = "Harga Kendaraan Mahal";
        } else {
            $status = "Harga Kendaraan Murah";
        }
        return $status;
    }
    function statusSubsidi()
    {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar == "Premium") {
            $status = "DAPAT SUBSIDI";
        } else {
            $status = "TIDAK DAPAT SUBSIDI";
        }
        return $status;
    }
}
//instansiasi kelas
$ObjekKendaraan = new Kendaraan();//pembuatan objek kelas
echo "Jumlah Roda : " . $ObjekKendaraan->jumlahRoda;
echo "<br>";
echo "Status Harga : " . $ObjekKendaraan->statusHarga();
echo "<br>";
echo "Status Subsidi : " . $ObjekKendaraan->statusSubsidi();
?>