<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <header>
        <h1> Resultado do Cadastro</h1>
    </header>
    <main>
       <?php 
       $nome = $_GET["nome"];
        $s = $_GET["sobrenome"];
        echo "<p>Bem vindo(a) a pesquisa do long-covid 
        <strong>$nome $s </strong>!";
       ?>
       <p><a href= "javascript:history.go(-1)"> Voltar para página anterior.
         </a></p>
    </main>
    </body>
</html>