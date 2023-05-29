<?php
    session_start();

    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha']) == true)){
        
        unset( $_SESSION['email']);
        unset( $_SESSION['senha']);
        header('Location: login.php');
    }

    

    $sql = "SELECT * FROM inscricoes ORDER BY id DESC";

    $resuslt = $conexao->query($sql);   

   
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Global.css">
    <link rel="stylesheet" href="painel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Painel - Desafio máxima produtividade</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Painel - Desafio máxima produtividade</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="logout.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <br>
    <?php
        echo "<h2>Bem Vindo! $logado </h2>";
    ?>
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Safra</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Tamanho Pr</th>
                    <th scope="col">Area cult</th>
                    <th scope="col">Cultivar</th>
                    <th scope="col">Sistema</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($resuslt)){
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['safra']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['telefone']."</td>";
                        echo "<td>".$user_data['tm_propriedade']."</td>";
                        echo "<td>".$user_data['area_cult']."</td>";
                        echo "<td>".$user_data['cultivar']."</td>";
                        echo "<td>".$user_data['sis_plantio']."</td>";
                        echo "<td>".$user_data['mod_plantio']."</td>";
                        echo "<td>
                            <a class='btn-sm' href='edit.php?id=$user_data[id]'>              
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                </svg>
                            </a>                 
                            </td>";
                    }
                 ?>
            </tbody>
        </table>
    </div>

</body>
</html>