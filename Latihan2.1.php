<?php
class Guru {
    var $nama_nama = array("de","ce","ve","re");
    var $nama_guru;
    var $NIK;
    var $jabatan;
    var $alamat;

}

class Murid {
    var $nama_siswa;
    var $NIS;
    var $Kelas;
    var $alamat;

}

class Kurikulum {
    var $tahun_akademik;
    var $sks_matkul;

}

class Mobil {
    var $jumlahRoda=4;
    var $warna="Merah";
    var $bahanBakar="Pertamax";
    var $harga=120000000;
    var $merek='A';


       public function statusHarga()
       {
        if (Sthis->harga > 50000000) $status = 'Mahal';
        else $status ='Murah';
        return $status = 'Murah';
       }
}

$ObjekBMW = new Mobil; 
$objekTesla = new Mobil;
$objekAudi = new Mobil;

?>