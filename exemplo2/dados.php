<?php
      $erro = false;
  
      if(count($_POST) > 0) {
          $nome = $_POST['nome'];
          $email = $_POST['email'];
          $senha = $_POST['senha'];
  
          if(empty($nome)){
              $erro = "preencher o nome";
          }
          if(empty($email)){
              $erro = "preencher o email";
          }
          if(empty($senha)){
              $erro = "preencher a senha";
          }
  
          if($erro){
              echo "erro: " . $erro;
              echo "
                  <a href='http://localhost/www/crud-mysqli/exemplo2'>
                      <button>Voltar</button>
                  </a>
              ";
              exit;
          }
      }
  
      // recebe os dados validados
      $conexao = mysqli_connect("localhost", "root", "", "crud-mysqli");
      $sql = "INSERT INTO usuario (nome, email, senha) 
              VALUES ('$nome', '$email', '$senha')";
      mysqli_query($conexao, $sql);
      mysqli_close($conexao);

    // header("Location: index.php");
?>