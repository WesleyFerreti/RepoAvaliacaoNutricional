<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
       
        <title></title>
    </head>
    <body>
   
        <?php
       include('./Classes/Adequacao.php');
       include('./Database.php');
       
        $db = Database::getInstance();
        $db->Connect("localhost", "root", "", "avaliacaonutricional", 3306);
        $ad1 = new Adequacao();
        
        $ad1->alimento = "Carne";
        $ad1->descricao = "Proteina";
        $ad1->Incluir();
      
        ?>
    </body>
</html>
