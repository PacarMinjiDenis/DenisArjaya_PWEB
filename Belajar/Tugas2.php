<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hitung Luas Lingkaran<br>";
        $jari = 10;
        echo "Jari-jari: $jari<br>";
        define("phi", 3.14);
        $luas = phi*$jari*$jari;
        echo "Luas Lingkaran = $luas";
    ?>

</body>
</html>