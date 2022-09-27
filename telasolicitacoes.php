<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="sheets/style.css">
        <title>Lista de Solicitações</title>
    </head>
    <body>
        
        <?php
            $numeroSolicitacao = _POST["numero"];
            $data = _POST["data"];
            $profissional = _POST["profissional"];
            $servico = _POST["servico"];

        ?>
      <h2>Minha lista de solicitações</h2>
      <a href="solicitarservico.html">Criar nova solicitação</a>
        <div>
        <table>
          <tr>
            <td>Número</td>
            <td>Data</td>
            <td>Serviço</td>
            <td>Status</td>
          </tr>
          <tr>
            <td><?php echo("$numeroSolicitacao");?></td>
            <td><?php echo("$data");?></td>
            <td><?php echo("$profissional - $servico");?>
            <td><?php echo("Aguardando início");?></td>
</td>   
          </tr>
        </table>>
        <p>Número da solicitação: <?php echo("$numeroSolicitacao");?></p>
        <p>Prestador: <?php echo("artur@gmail.com");?></p> 

        <a href="telasolicitacoes.html">Ir para sua lista de solicitações</a>
        </div>

        <footer>
            
        </footer>
    </body>
</html>
