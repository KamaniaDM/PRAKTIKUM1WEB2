<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikumweb2-Nomor3</title>
</head>
<body>
    <?php
    $celcius= 37.841;
    $fahrenheit=($celcius*9/5) +32; //rumus menghitung fahrenheit
    $reamur=($celcius*4/5); //rumus menghitung reamur
    $kelvin=($celcius+273.15); //rumus menghitung kelvin
    echo "Fahrenheit (F) :".number_format($fahrenheit,4)."<br>";    
    echo "Reamur (R): ".number_format($reamur,4)."<br>";    
    echo "Kelvin (K) :".number_format($kelvin,4)."<br>";
    ?>
</body>
</html>