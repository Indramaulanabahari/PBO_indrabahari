<?php
for ($i = 1; $i < 5; $i++) {
    for ($j = $i; $j <= 5; $j++) {
        echo "&nbsp;"; // it will print blank space
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo '<br/>';
}
?>
<?php
$total_rows = 10;
$max_stars = 5;

for ($i = 1; $i <= $total_rows; $i++) {
    if ($i <= $max_stars) {
        $stars = $i; // Baris 1 sampai 5
    } else {
        $stars = $total_rows - $i; // Baris 6 sampai 10
    }

    // Menghitung spasi sebelum bintang
    $spaces = $max_stars - $stars;
    echo str_repeat("&nbsp;", $spaces); // Menambahkan spasi

    // Menambahkan bintang
    echo str_repeat("*", $stars);
    echo "<br/>";
}
?>