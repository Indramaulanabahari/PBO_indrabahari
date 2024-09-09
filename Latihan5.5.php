<?php

$kartu_member = "ya";
$total_belanja = 334000;
$diskon = 0;

switch ($kartu_member) {
    case "ya":
        if ($total_belanja >= 100000) {
            if ($total_belanja > 500000) {
                $diskon = 50000;
            } else {
                $diskon = 15000;
            }
        } else if ($total_belanja >= 10000) {
            $diskon = 5000;
        }
        break;

    case "tidak":
        if ($total_belanja >= 100000) {
            if ($total_belanja > 500000) {
                $diskon = 50000;
            } else {
                $diskon = 5000;
            }
        }
        break;

    default:
        echo "Status kartu member tidak valid.";
        exit();
}

$total_bayar = $total_belanja - $diskon;

echo "Apakah ada kartu member: " . $kartu_member . "<br>";
echo "Total belanjaan: Rp " . number_format($total_belanja, 0, ',', '.') . "<br>";
echo "Total bayar: Rp " . number_format($total_bayar, 0, ',', '.');
?>