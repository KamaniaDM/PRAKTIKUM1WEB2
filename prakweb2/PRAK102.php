<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikumweb2-Nomor2</title>
</head>
<body>
    <?php
     $tinggiPrisma = 5.4;
     $tinggiSegitiga = 12.5;
     $panjangAlasSegitiga = 7.9;
     $luasAlas = 1/2 * $panjangAlasSegitiga * $tinggiSegitiga;

     $volumePrisma = $luasAlas * $tinggiPrisma; //rumus volume prisma alas segitiga
     echo number_format ($volumePrisma, 3) . " m3";
?>
</body>
</html>