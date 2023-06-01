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
        <div class="agradecimento"> 
            <h1 id="txt_agr">CADASTRO REALIZADO COM SUCESSO.</h1>
            <br><br>
          <button  name="btn_entrar" class="btn_pr" id="btn_entrar" >Entrar</button>
        </div>
        
    
    
    
</body>
</html>
<script>
  document.getElementById("btn_entrar").addEventListener("click", function() {
    window.location.href = "login.php";
  });
</script>