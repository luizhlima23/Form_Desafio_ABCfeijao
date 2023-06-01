<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/Global.css">
    
</head>
<body>

    <svg class="bg_color">
		<rect id="bg_color" rx="0" ry="0" x="0" y="0"  width="100%" height="100%">
		</rect>
	</svg>
    
    <a href="https://abcfeijao.com.br/">
        <div class="logo"> <img src="css/img/ABC Feijão - LOGO.png" alt=""></div>
    </a>
    <br>
        <div> 
            <h1 class="titulo">DESAFIO MÁXIMA PRODUTIVIDADE<br> DO FEIJÃO IRRIGADO</h1>
        </div>
        <div class="box">
            <h2>ACESSE</h2>
            <form action="testLogin.php" method="POST">
                <input type="text" name="email" id="email" placeholder="Email" class="text">
                
                <br><br>
                <input type="password" name="senha" id="senha" placeholder="Senha"  class="text">
                <br><br>

                <button type="submit" name="submit" class="btn_pr" id="submit" >Entrar</button>
                <br>
                <button id="btn_cadastro" type="button" name="btn_cadastro" class="btn_sc">Não tem cadastro? <i><u>Clique aqui</u></i>.</button>
              
            </form>
                
        </div>
    </div>
    
    
</body>
</html>
<script>
  document.getElementById("btn_cadastro").addEventListener("click", function() {
    window.location.href = "Cadastro.php";
  });
</script>