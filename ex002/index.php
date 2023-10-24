<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>

    <?php
        date_default_timezone_set("America/Sao_Paulo"); // GMT-3
        echo "Hoje é dia de sol 😎 🐘: " . date("D/M/Y") ; 
        echo ". A hora atual é......" . date("G:i:s T");   
        const PAIS = "Brasil" ;
        $num = (float) "PAIS";
        var_dump(PAIS);

        
    ?>
    
</body>
</html>