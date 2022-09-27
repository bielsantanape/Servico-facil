<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmacaoSenha = $_POST['confirmacao'];

    if($senha == $confirmacaoSenha){
        echo "<meta http-equiv='refresh' content='0;URL=../validacao.html'>";
    }else{
        echo("Senhas diferentes. Digite iguais para continuar com o cadastro.");
    }
?>