<?php
$ListSamsung   =   ['S22'=>'Samsung   Galaxy   S22','S22P'=>'Samsung   Galaxy   S22+',   'SA03'=>'Samsung   Galaxy A03', 'SXC5'=>'Samsung Galaxy Xcover 5'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikumweb2-Nomor5</title>
    <style>
        .Samsung {            
            font-weight: 800;
            font-size: 25px;           
            background-color: red;            
            padding: 20px 0 20px 0;        
            }    
            </style>
</head>
<body>
<table border="1">        
                    <tr>
                    <td   class="Samsung">Daftar Smartphone Samsung</td>
                    </tr>        
                    <tr>            
                        <td><?php echo $ListSamsung['S22']; ?></td>        
                    </tr>        
                    <tr>            
                        <td><?php echo $ListSamsung['S22P']; ?></td>        
                    </tr>        
                    <tr>            
                        <td><?php echo $ListSamsung['SA03']; ?></td>        
                    </tr>        
                    <tr>            
                        <td><?php echo $ListSamsung['SXC5']; ?></td>        
                    </tr>    
                </table>
</body>
</html>