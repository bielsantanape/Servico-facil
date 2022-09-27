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
			<form action="telasolicitacoes.php" method="post">
				<h2>Solicitação confirmada</h2>
				<p>Número da solicitação: <?php echo("$numero");?></p>

				<p>Prestador: <?php echo("artur@gmail.com");?></p> 
				<input type="submit" name="acao" value="Ir para sua lista de solicitações">
			</form>
        </div>

        <footer>
            
        </footer>
    </body>
</html>
