<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './ConexaoDB.php';
        require_once './Nutricionista.php';
        $db = new Conexao("localhost", "root", "", "avaliacaonutricional", 3306);
        $n1 = new Nutricionista();
        
        $n1->Visualizar($db);
        ?>
    </body>
</html>
