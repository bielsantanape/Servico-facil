<?php

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    if($email == "fulano@teste.com.br"){
        if($senha =="senha123"){
            echo "<meta http-equiv='refresh' content='0;URL=../solicitarservico.html'>";
    }
  }

?>
