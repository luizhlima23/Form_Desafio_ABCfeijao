<?php 

    if(isset($_POST['submit'])){

        $prod_cpf = $_POST['prod_cpf'];
        $consult_cpf = $_POST['consult'];
        
        $result= mysqli_query($conexao,"INSERT INTO usuarios(nome,email,telefone,senha) VALUES('$nome','$email','$telefone','$senha')");
        
        }

?>

