<?php
class SegitigaBintang
{
    var $t;

    public function setTinggi($t)
    {
        $this->t = $t;
    }

    public function cetakSegitigaSamaKaki()
    {
        $bintang = [2, 4, 6, 8, 10];

        $tinggi = max($bintang);

        foreach ($bintang as $i) {

            for ($j = $tinggi; $j > $i; $j--) {
                echo "&nbsp;";
            }

            for ($k = 1; $k <= $i; $k++) {
                echo "* ";
            }
            echo "<br>";
        }
    }

    public function cetakSegitigaKanan()
    {

        $bintang = [1, 2, 3, 4, 5, 5, 4, 3, 2, 1];
        foreach ($bintang as $i) {
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    }

    public function cetakSegitigaKiri()
    {
        $bintang = [1, 2, 3, 4, 5, 5, 4, 3, 2, 1];
        $tinggi = max($bintang);

        foreach ($bintang as $i) {

            for ($j = $tinggi; $j > $i; $j--) {
                echo "&nbsp;&nbsp;&nbsp;";
            }

            for ($k = 1; $k <= $i; $k++) {
                echo "* ";
            }
            echo "<br>";
        }
    }
}

$segitiga1 = new SegitigaBintang();
echo "<br>Segitiga Sama Kaki:<br>";
$segitiga1->setTinggi(10);
$segitiga1->cetakSegitigaSamaKaki();

$segitiga2 = new SegitigaBintang();
echo "<br>Segitiga Kanan:<br>";
$segitiga2->setTinggi(10);
$segitiga2->cetakSegitigaKanan();

$segitiga3 = new SegitigaBintang();
echo "<br>Segitiga Kiri:<br>";
$segitiga3->setTinggi(10);
$segitiga3->cetakSegitigaKiri();
?>