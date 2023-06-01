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
        header('Location: ObrigadoCadastro.php');
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

    <a href="https://abcfeijao.com.br/">
        <div class="logo"> <img src="css/img/ABC Feijão - LOGO.png" alt=""></div>
    </a>
    
    <br>
        <div> 
            <h1 class="titulo">DESAFIO MÁXIMA PRODUTIVIDADE<br> DO FEIJÃO IRRIGADO</h1>
        </div>
    
    <div class="box" id="box_cad">
        <h2>CADASTRE-SE</h2>
        <form action="Cadastro.php" method="POST">
           
                <br>
                <div class="inputbox" style="width: 100%;" >
                    <input  type="text" name="nome" id="nome" placeholder="Nome Completo"  required>   
                </div>
                <br><br>
                <div class="inputbox" style="width: 100%;">
                    <input type="text" name="email" id="email" placeholder="Email"  required>
                </div>
                <br><br>
                <div class="inputbox" style="width: 50%;" >
                    <input style="width: 90%;" type="phone" name="telefone" id="telefone" placeholder="Telefone" required>
                </div>
                <div class="inputbox" style="width: 30%;">
                    <input  type="password" name="senha" id="senha" placeholder="Digite uma senha"  required>
                </div>
                <br><br>
                <div class="button-row">
                    <button type="submit" name="submit" class="btn_pr" id="submit" >Cadastrar</button>
                    <p>Já tem cadastro?
                    <a href="login.php">Acesse aqui</a>
                    </p>
                </div>
               
               
            
        </form>
    </div>
</body>
</html>