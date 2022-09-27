<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="sheets/style.css">
        <title>Confirmar Serviço</title>
    </head>
    <body>
        <?php
            $servico = $_POST['servico'];
            $profissional = $_POST['profissional'];
            $servico = $_POST['servico'];
            $preco=0;
            $credito=0;
            $valor= $preco - $credito;
        ?>
        <form action="confirmacaosolicitacao.php" method="post">
            <h2>Confirme o preço do serviço</h2>
            <p>Tipo de Serviço: <?php echo("$profissional");?></p>
            <p>Serviço: <?php echo("$servico");?></p> 
            <p>Preço: <?php echo("R$ $preco");?></p> 
            <p>Seu crédito: <?php echo("R$ $credito");?></p> 
            <p>Valor a ser cobrado: <?php echo("R$ $valor");?></p> 
            <input type="submit" name="acao" value="Confirmar">
        </form>

        <footer>
        
        </footer>
    </body>
</html>