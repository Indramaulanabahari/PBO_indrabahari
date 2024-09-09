<?php
class Kendaraan
{
    var $harga;
    var $bahanBakar;
    var $tahunPembuatan;
    var $platNomor;

    function __construct($harga, $bahanBakar, $tahunPembuatan, $platNomor)
    {
        $this->harga = $harga;
        $this->bahanBakar = $bahanBakar;
        $this->tahunPembuatan = $tahunPembuatan;
        $this->platNomor = $platNomor;
    }

    function statusHarga()
    {
        return ($this->harga > 50000000) ? "Mahal" : "Murah";
    }

    function dapatSubsidi()
    {
        return ($this->bahanBakar == "Premium" && $this->tahunPembuatan < 2005) ? "Dapat Subsidi" : "Tidak Dapat Subsidi";
    }

    function hargaBekas()
    {
        if ($this->tahunPembuatan > 2005) {
            return $this->harga * 0.80;
        } elseif ($this->tahunPembuatan >= 2000 && $this->tahunPembuatan <= 2005) {
            return $this->harga * 0.70;
        } else {
            return $this->harga * 0.60;
        }
    }

    function hitungPajak()
    {
        if ($this->tahunPembuatan <= 2017) {
            return $this->harga * 0.025;
        } else {
            return 0;
        }
    }

    function hariOperasi()
    {

        $digit = preg_replace('/[^0-9]/', '', $this->platNomor);

        $digitTerakhir = substr($digit, -1);

        if ($digitTerakhir !== false) {
            if ($digitTerakhir % 2 == 0) {
                return "Selasa, Kamis, Sabtu";
            } else {
                return "Senin, Rabu, Jumat, Minggu";
            }
        } else {
            return "Plat nomor tidak valid";
        }
    }
}

$kendaraan1 = new Kendaraan(50000000, "Premium", 1999, "B1234CD");

echo "Status Harga: " . $kendaraan1->statusHarga() . "<br>";
echo "Status BBM: " . $kendaraan1->dapatSubsidi() . "<br>";
echo "Harga Bekas: Rp " . number_format($kendaraan1->hargaBekas(), 0, ',', '.') . "<br>";
echo "Pajak: Rp " . number_format($kendaraan1->hitungPajak(), 0, ',', '.') . "<br>";
echo "Hari Operasi Plat Nomor: " . $kendaraan1->hariOperasi() . "<br>";
?>