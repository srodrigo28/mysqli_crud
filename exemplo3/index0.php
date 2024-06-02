<?php

    $erro  = false;
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
            echo "<p> <b>Erro: $erro </b> </p>";
        }else{
            echo "<p>Sucesso</p>";
        }
    }
 // header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crude 03</title>
</head>
<body>
    <form method="POST" action="#">
        <label for="nome"> Nome
            <input type="text" value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>" name="nome" id="nome" >
        </label>
        
        <label for="nome"> E-mail
            <input type="text"     name="email" id="email" />
        </label>

        <label for="nome"> Senha
            <input type="password" name="senha" id="senha" />
        </label>
        
        <button type="submit">Cadastrar </button>
    </form>
</body>
</html>