<?php
// $GET data ini terambil dengan cara GET

$siswa = [
    [
        "Nama" => "Nitta Amandah",
        "umur" =>"16",
        "hobi" =>"Membaca Novel"
    ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Siswa</h1>

    <ul>
    <?php foreach ($siswa as $sws): ?>
<ul>
         <li><a href="latihan2.php?Nama=<?= $sws["Nama"];?>
    &umur=<?= $sws ["umur"];?>
    &hobi=<?= $sws ["hobi"];?>
    "><?= $sws["Nama"];?></li>
    </a>
</ul>
<?php endforeach;?>
    <ul>

</body>
</html>