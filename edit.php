<?php

    if(!empty($_GET['id'])){
        // print_r($_POST['nome']);
        // print_r($_POST['email']);
        // print_r($_POST['telefone']);
        // print_r($_POST['senha']);

        include_once('config.php');

        $id=$_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao ->query($sqlSelect);

        if($result->num_rows >0){

            while($user_data = mysqli_fetch_assoc($result)){

                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $senha = $user_data['senha'];

            }
           print_r($nome);
        }else{
            header('Location: painel.php');
        }

       


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="Cadastro.css">
    <link rel="stylesheet" href="Global.css">
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
                    <input type="text" name="nome" id="nome" placeholder="Nome Completo" value="<?php echo $nome ?>" required>   
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" placeholder="Email" value="<?php echo $email ?>"  required>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="phone" name="telefone" id="telefone" placeholder="Telefone" value="<?php echo $telefone ?>" required>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="password" name="senha" id="senha" placeholder="Digite uma senha" value="<?php echo $senha ?>"  required>
                </div>
                <br><br>
                
                <button type="submit" name="submit" class="btn_pr" id="submit" >Cadastrar</button>
                <button name="btn_entra" class="btn_sc"onclick="location.href='login.php'" >Entrar</button>
               
            </fieldset>
        </form>
    </div>
</body>
</html>