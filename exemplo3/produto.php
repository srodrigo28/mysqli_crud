<?php
    include('conexao.php');

        // $nome  = null;
        // $email = null;
        // $senha = null;
        // $dt_cadastro  = null;

    if(count($_POST) > 0) {
        $erro  = false;

        $nome  = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $dt_cadastro  = $_POST['dt_cadastro'];

        if(empty($nome)){
            $erro = "preencher o nome";
        }
        if(empty($email)){
            $erro = "preencher o email";
        }
        if(empty($senha)){
            $erro = "preencher a senha";
        }
        if(empty($dt_cadastro)){
            $erro = "preencher a data";
        }
        if($erro){
            echo "<p> <b>Erro: $erro </b> </p>";
        }else{

            $sql_code = "INSERT INTO usuario (nome, email, senha, dt_cadastro) 
                VALUES ( '$nome', '$email', '$senha', '$dt_cadastro')";
            
            $result = $mysqli->query($sql_code) or die($mysqli->error);
            $mysqli->close();

            if($result){
                echo "
                    <script> 
                        alert('Cadastrado com sucesso')
                    </script>
                ";
                // $_POST['nome'] = '';
                // $_POST['email'] = '';
                // $_POST['senha'] = '';
                // $_POST['dt_cadastro'] = '';
                header("Location: index.html");
            }

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
    <form method="POST" action="#" autocomplete="off">
        <label for="nome"> Nome
            <input type="text" value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>" name="nome" id="nome" >
        </label>
        
        <label for="email"> E-mail
            <input type="text" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"  name="email"  id="email" autocomplete="off" />
        </label>

        <label for="senha"> Senha
            <input type="password" value="<?php if(isset($_POST['senha'])) echo $_POST['senha']; ?>" name="senha" id="senha" />
        </label>

        <label for="dt_cadastro"> Data
            <input type="date" value="<?php if(isset($_POST['dt_cadastro'])) echo $_POST['dt_cadastro']; ?>" name="dt_cadastro" id="dt_cadastro" />
        </label>
        
        
        <button type="submit">Cadastrar </button>
    </form>
</body>
</html>