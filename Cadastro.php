<?php

    if(isset($_POST['submit'])){
        // print_r($_POST['nome']);
        // print_r($_POST['email']);
        // print_r($_POST['telefone']);
        // print_r($_POST['senha']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];

        $result= mysqli_query($conexao,"INSERT INTO usuarios(nome,email,telefone,senha) VALUES('$nome','$email','$telefone','$senha')");
        header('Location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="css/Cadastro.css">
    <link rel="stylesheet" href="css/Global.css">
</head>
<body>
    <svg class="bg_color">
		<rect id="bg_color" rx="0" ry="0" x="0" y="0" width="100%" height="100%">
		</rect>
	</svg>
    
    <div class="box">
        <form action="Cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastrar</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" placeholder="Nome Completo"  required>   
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" placeholder="Email"  required>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="phone" name="telefone" id="telefone" placeholder="Telefone" required>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="password" name="senha" id="senha" placeholder="Digite uma senha"  required>
                </div>
                <br><br>
                
                <button type="submit" name="submit" class="btn_pr" id="submit" >Cadastrar</button>
                <button name="btn_entra" class="btn_sc"onclick="location.href='login.php'" >Entrar</button>
               
            </fieldset>
        </form>
    </div>
</body>
</html>