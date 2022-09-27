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
            $preco;
            $credito=10;
            $valor= $preco - $credito;
            switch($servico){
                case "Vazamento de Torneira":
                    $preco = 10;
                    break;
                case "Vazamento em Descarga":
                    $preco = 20;
                    break;
                case "Vazamento no teto":
                    $preco = 30;
                    break;
                case "Troca de Pia":
                    $preco = 40;
                    break;
                case "Instalação elétrica":
                    $preco = 45;
                    break;
                defalut:
                    $preco = 50;
                    break;
            }
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
