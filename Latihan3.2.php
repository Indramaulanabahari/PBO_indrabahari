<?php
class Kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga = 350000000;
    var $merek;
    var $status;
    var $tahunPembuatan; // Tambahkan properti ini

    function statusHarga()
    {
        if ($this->harga > 50000000) {
            $this->status = "Mahal";
        } else {
            $this->status = "Murah";
        }
        return $this->status;
    }

    // Menambahkan metode dapatSubsidi
    function dapatSubsidi()
    {
        // Misalnya, kendaraan dengan bahan bakar tertentu mendapatkan subsidi
        if ($this->bahanBakar == "Pertamax") {
            return "Dapat Subsidi";
        } else {
            return "Tidak Dapat Subsidi";
        }
    }

    // Menambahkan metode hargaSecondKendaraan
    function hargaSecondKendaraan()
    {
        // Misalnya, harga bekas kendaraan 30% dari harga baru
        return $this->harga * 0.3;
    }
}

// Deklarasi objek dan instansiasi objek (berada di luar class)
$objekKendaraan2 = new Kendaraan;

// Setting properties
$objekKendaraan2->bahanBakar = "Pertamax";
$objekKendaraan2->tahunPembuatan = 1999;

// Instansiasi objek (pemanggilan method/function)
echo "<br>";
echo "Status BBM: " . $objekKendaraan2->dapatSubsidi();
echo "<br>";
echo "Harga Bekas: " . $objekKendaraan2->hargaSecondKendaraan();
?>