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
            $numero = rand(1,1000);
        ?>

        <div class="confirmarcadastro">
        <h2>Solicitação confirmada</h2>
        <p>Número da solicitação: <?php echo("$numero");?></p>
        <p>Prestador: <?php echo("artur@gmail.com");?></p> 

        <a href="telasolicitacoes.php">Ir para sua lista de solicitações</a>
        </div>

        <footer>
            
        </footer>
    </body>
</html>
