<?php
class BangunRuang
{
    protected $volume;

    public function getVolume()
    {
        return $this->volume;
    }

    protected function hitungVolume()
    {
        // Metode ini akan di-override oleh subclass
    }
}

class Bola extends BangunRuang
{
    private $jariJari;

    public function __construct($jariJari)
    {
        $this->setJariJari($jariJari);
    }

    public function setJariJari($jariJari)
    {
        $this->jariJari = $jariJari;
        $this->hitungVolume();
    }

    protected function hitungVolume()
    {
        $this->volume = (4 / 3) * pi() * pow($this->jariJari, 3);
    }

    public function getJariJari()
    {
        return $this->jariJari;
    }
}

class Kerucut extends BangunRuang
{
    private $jariJari, $tinggi;

    public function __construct($jariJari, $tinggi)
    {
        $this->setJariJari($jariJari);
        $this->setTinggi($tinggi);
    }

    public function setJariJari($jariJari)
    {
        $this->jariJari = $jariJari;
        $this->hitungVolume();
    }

    public function setTinggi($tinggi)
    {
        $this->tinggi = $tinggi;
        $this->hitungVolume();
    }

    protected function hitungVolume()
    {
        $this->volume = (1 / 3) * pi() * pow($this->jariJari, 2) * $this->tinggi;
    }

    public function getJariJari()
    {
        return $this->jariJari;
    }

    public function getTinggi()
    {
        return $this->tinggi;
    }
}

class LimasSegiEmpat extends BangunRuang
{
    private $sisi, $tinggi;

    public function __construct($sisi, $tinggi)
    {
        $this->setSisi($sisi);
        $this->setTinggi($tinggi);
    }

    public function setSisi($sisi)
    {
        $this->sisi = $sisi;
        $this->hitungVolume();
    }

    public function setTinggi($tinggi)
    {
        $this->tinggi = $tinggi;
        $this->hitungVolume();
    }

    protected function hitungVolume()
    {
        $this->volume = ($this->sisi * $this->sisi * $this->tinggi) / 3;
    }

    public function getSisi()
    {
        return $this->sisi;
    }

    public function getTinggi()
    {
        return $this->tinggi;
    }
}

class Kubus extends BangunRuang
{
    private $sisi;

    public function __construct($sisi)
    {
        $this->setSisi($sisi);
    }

    public function setSisi($sisi)
    {
        $this->sisi = $sisi;
        $this->hitungVolume();
    }

    protected function hitungVolume()
    {
        $this->volume = pow($this->sisi, 3);
    }

    public function getSisi()
    {
        return $this->sisi;
    }
}

class Tabung extends BangunRuang
{
    private $jariJari, $tinggi;

    public function __construct($jariJari, $tinggi)
    {
        $this->setJariJari($jariJari);
        $this->setTinggi($tinggi);
    }

    public function setJariJari($jariJari)
    {
        $this->jariJari = $jariJari;
        $this->hitungVolume();
    }

    public function setTinggi($tinggi)
    {
        $this->tinggi = $tinggi;
        $this->hitungVolume();
    }

    protected function hitungVolume()
    {
        $this->volume = pi() * pow($this->jariJari, 2) * $this->tinggi;
    }

    public function getJariJari()
    {
        return $this->jariJari;
    }

    public function getTinggi()
    {
        return $this->tinggi;
    }
}

// Buat array untuk menyimpan objek bangun ruang
$bangunRuangs = [
    new Bola(7),
    new Kerucut(14, 10),
    new LimasSegiEmpat(8, 24),
    new Kubus(30),
    new Tabung(7, 10)
];

// Tampilkan dalam bentuk tabel HTML
echo "<table border='1'>";
echo "<tr><th>Jenis Bangun Ruang</th><th>Sisi</th><th>Jari-jari</th><th>Tinggi</th><th>Volume</th></tr>";
foreach ($bangunRuangs as $bangunRuang) {
    echo "<tr>";
    echo "<td>" . get_class($bangunRuang) . "</td>";
    echo "<td>" . (method_exists($bangunRuang, 'getSisi') ? $bangunRuang->getSisi() : '-') . "</td>";
    echo "<td>" . (method_exists($bangunRuang, 'getJariJari') ? $bangunRuang->getJariJari() : '-') . "</td>";
    echo "<td>" . (method_exists($bangunRuang, 'getTinggi') ? $bangunRuang->getTinggi() : '-') . "</td>";
    echo "<td>" . $bangunRuang->getVolume() . "</td>";
    echo "</tr>";
}
echo "</table>";
?>