<?php

session_start();
$email = $_SESSION['email'];
include_once('config.php');

$sql = "SELECT nome, telefone FROM usuarios WHERE email = '$email'";
$getnome = mysqli_query($conexao, $sql);
// Verifique se a consulta retornou resultados
if (mysqli_num_rows($getnome) > 0) {
  // Recupere o nome do usuário
  $row = mysqli_fetch_assoc($getnome);
  $nome_usuario = $row['nome'];
  $telefone = $row['telefone'];

  // Atualize o campo do formulário com o valor do nome do usuário
  // Supondo que o campo do formulário tenha o nome 'nome_usuario'
  echo '<script>document.getElementById("nome_usuario").value = "' . $nome_usuario . '";</script>';
}

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['email']) == true)) {

  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $safra = $_POST['safra'];
  $cpf_prod = $_POST['cpf_prod'];
  $cpf_cons = $_POST['cpf_cons'];
  $n_propriedade = $_POST['n_propriedade'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $tm_propriedade = $_POST['tm_propriedade'];
  $area_cult = $_POST['area_cult'];
  $n_gleba = $_POST['n_gleba'];
  $cultivar = $_POST['cultivar'];
  $data_plantio = $_POST['data_plantio'];
  $sis_plantio = $_POST['sis_plantio'];
  $mod_plantio = $_POST['mod_plantio'];
  $cultura_ant = $_POST['cultura_ant'];
  $temp_exp = $_POST['temp_exp'];


  $sqlenvio = "INSERT INTO inscricoes(safra,nome,email,telefone,cpf_prod,cpf_cons,n_propriedade,cidade,estado,tm_propriedade,area_cult,n_gleba,cultivar,data_plantio,sis_plantio,mod_plantio,cultura_ant,temp_exp) 
  VALUES('$safra','$nome_usuario','$email','$telefone','$cpf_prod','$cpf_cons','$n_propriedade','$cidade','$estado','$tm_propriedade','$area_cult','$n_gleba','$cultivar','$data_plantio','$sis_plantio','$mod_plantio','$cultura_ant','$temp_exp')";
  $envio = mysqli_query($conexao, $sqlenvio);
print_r($nome_usuario);
echo "<br>";
print_r($email);
echo "<br>";
print_r($telefone);
echo "<br>";
print_r($safra);
echo "<br>";
print_r($_POST['cpf_prod']);
echo "<br>";
print_r($_POST['cpf_cons']);
echo "<br>";
print_r($_POST['n_propriedade']);
echo "<br>";
print_r($_POST['cidade']);
echo "<br>";
print_r($_POST['estado']);
echo "<br>";
print_r($_POST['tm_propriedade']);
echo "<br>";
print_r($_POST['area_cult']);
echo "<br>";
print_r($_POST['n_gleba']);
echo "<br>";
print_r($_POST['cultivar']);
echo "<br>";
print_r($_POST['data_plantio']);
echo "<br>";
print_r($_POST['sis_plantio']);
echo "<br>";
print_r($_POST['mod_plantio']);
echo "<br>";
print_r($_POST['cultura_ant']);
echo "<br>";
print_r($_POST['temp_exp']);
echo "<br>";
header('Location: ObrigadoCadastro.php');
}


// $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,senha) VALUES('$nome','$email','$telefone','$senha')");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <script type="text/javascript" src="jquery-1.7.1.min.js"></script>


  <link rel="stylesheet" href="css/style.css">
  <title>Desafio Maxima Produtividade</title>

</head>

<body>

  
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Inscrição - Desafio máxima produtividade</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="d-flex">
      <a href="logout.php" class="btn btn-danger me-5">Sair</a>
    </div>
  </nav> -->
  <a href="https://abcfeijao.com.br/" class="logo">
         <img src="css/img/ABC Feijão - LOGO.png" alt="">
    </a>

  <form id="regForm" name="regForm" action="Inscricao.php" method="POST">


    <!-- One "tab" for each step in the form: -->
    <div class="tab">
      <h2><b>1 - DADOS INICIAIS:</b></h2>
      <p><select id="safra" name="safra" onchange="validateForm()" required>
              <option value="">Escolha a safra da inscrição</option>
              <option value="safra - 2023">2023</option>
            </select></p>
      <p><input placeholder="Produtor - CPF/CNPJ ou email" oninput="this.className = ''" name="cpf_prod" id="cpf_prod"></p>
      <p><input type="checkbox" oninput="this.className = ''" id="comfirm01" name="comfirm01" value="true" style="width: auto;"><label for="comfirm01">Declaro que o proprietario deste CPF/CNPJ ou email está ciennte que será relacionado a esta inscrição.</label>
      </p>
      <p><input  placeholder="Consultor - CPF/CNPJ ou email" oninput="this.className = ''" name="cpf_cons" id="cpf_cons"></p>
      <p><input type="checkbox" oninput="this.className = ''" id="comfirm02" name="comfirm02" value="true" style="width: auto;"><label for="comfirm02">Declaro que o proprietario deste CPF/CNPJ ou email está ciennte que será relacionado a esta inscrição.</label>
      </p>
    </div>

    <div class="tab">
      <h2>2 - Dados da Propriedade</h2>
      <table>
        <tr>
          <td>Nome da Propriedade</td>
        </tr>
      </table>
      <p>
        <input type="text" style="width: 50%;" id="n_propriedade" name="n_propriedade" placeholder="Nome da propriedade" oninput="this.className = ''">
        <input style="width: 35%;" id="cidade" name="cidade" placeholder="Cidade" oninput="this.className = ''">
      </p>
      <p>
      <table>
        <tr>
          <td><label for="estado">Estado</label><br></td>
          <td><label for="tm_propriedade">Tamanho da propriedade</label></td>
          <td><label for="area_cult">Área cultivada com feijão irrigado</label></td>
        </tr>
        <tr>
          <td>

            <select id="estado" name="estado" onchange="validateForm()" required>
              <option value="">UF</option>
              <option value="GO">GO</option>
              <option value="MG">MG</option>
              <option value="SP">SP</option>
              <option value="MT">MT</option>
              <option value="DF">DF</option>
              <option value="PR">PR</option>
            </select>
          </td>
          <td><select id="tm_propriedade" name="tm_propriedade" onchange="validateForm()" required>
              <option value="">escolha um tamanho em (há)</option>
              <option value="100">100 há</option>
              <option value="250">250 há</option>
              <option value="500">500 há</option>
              <option value="1.000">1.000 há</option>
              <option value="2.500">2.500 há</option>
              <option value="5.000">5.000 há</option>
              <option value="10.000">10.000 há</option>
              <option value=">10.000">+ de 10.000 há</option>
            </select></td>
          <td><select id="area_cult" name="area_cult" onchange="validateForm()" required>
              <option value="">escolha a area</option>
              <option value="50">50 há</option>
              <option value="100">100 há</option>
              <option value="150">150 há</option>
              <option value="250">250 há</option>
              <option value="500">500 há</option>
              <option value="1.000">1.000 há</option>
              <option value="2.500">2.500 há</option>
              <option value="5.000">5.000 há</option>
            </select></td>
        </tr>

      </table>

      </p>
      <p><input id="n_gleba" name="n_gleba" placeholder="Nome da Gleba/Talhão/Pivô" oninput="this.className = ''"></p>
    </div>

    <div class="tab">3 - Sistema de Produção:
      <p>
        <input id="cultivar" name="cultivar" placeholder="Cultivar" oninput="this.className = ''">
      </p>
      <p><label for="data_plantio">data do plantio</label>
        <input id="data_plantio" name="data_plantio" type="date" placeholder="" oninput="this.className = ''">
      </p>
      <p>
      <table>
        <tr>
          <td><label for="sis_plantio">Sistema de Plantio</label><br></td>
          <td><label for="mod_plantio">Modelo de produção</label></td>
        </tr>
        <tr>
          <td><select id="sis_plantio" name="sis_plantio">
              <option value="">escolha o sistema</option>
              <option value="Botinha">Semeado com botinha</option>
              <option value="Disco">Semeado com disco</option>
            </select>
          </td>
          <td><select id="mod_plantio" name="mod_plantio">
              <option value="">escolha o modelo de plantio</option>
              <option value="Direto">Direto</option>
              <option value="Convencional">Convencional</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="cultura_ant">Cultura antecessora</label><br></td>
          <td><label for="temp_exp">Modelo de produção</label></td>
        </tr>
        <tr>
          <td><select id="cultura_ant" name="cultura_ant">
              <option value="">escolha a cultura</option>
              <option value="Soja">Soja</option>
              <option value="Milho">Milho</option>
              <option value="Milho semente">Milho semente</option>
              <option value="Milheto">Milheto</option>
              <option value="Mix de plantas de cobertura">Mix de plantas de cobertura</option>
              <option value="Arroz">Arroz</option>
              <option value="Outra">Outra</option>
            </select>
          </td>
          <td><select id="temp_exp" name="temp_exp">
              <option value="">escolha o tempo de exploração em anos</option>
              <option value="5 anos">5 anos</option>
              <option value="10 anos">10 anos</option>
              <option value="15 anos">15 anos</option>
              <option value="20 anos">20 anos</option>
              <option value="25 anos">25 anos</option>
              <option value="30 anos">30 anos</option>
            </select></td>
        </tr>

      </table>
      </p>
    </div>

    <!-- <div class="tab">Login Info:
      <p><input placeholder="Username..." oninput="this.className = ''"></p>
      <p><input placeholder="Password..." oninput="this.className = ''"></p>
    </div> -->

    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
        <button type="button" id="nextBtn" name="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
    </div>

    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:30px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>


    </div>



  </form>

  <script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Enviar";
        submitForm();

      } else {
        document.getElementById("nextBtn").innerHTML = "Próximo";

      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }

    function submitForm() {
      // Cria um objeto com os dados do formulário
      var formData = {
        safra: document.getElementById9("safra").value,
        cpf_prod: document.getElementById("cpf_prod").value,
        cpf_cons: document.getElementById("cpf_cons").value,
        n_propriedade: document.getElementById("n_propriedade").value,
        cidade: document.getElementById("cidade").value,
        estado: document.getElementById("estado").value,
        tm_propriedade: document.getElementById("tm_propriedade").value,
        area_cult: document.getElementById("area_cult").value,
        n_gleba: document.getElementById("n_gleba").value,
        cultivar: document.getElementById("cultivar").value,
        data_plantio: document.getElementById("data_plantio").value,
        sis_plantio: document.getElementById("sis_plantio").value,
        mod_plantio: document.getElementById("mod_plantio").value,
        cultura_ant: document.getElementById("cultura_ant").value,
        temp_exp: document.getElementById("temp_exp").value
      };

      // Faz uma requisição POST para enviar os dados do formulário ao servidor
      fetch("seu_endpoint", {
          method: "POST",
          body: JSON.stringify(formData),
          headers: {
            "Content-Type": "application/json"
          }
        })
        .then(function(response) {
          // Lida com a resposta do servidor
          // ...
        })
        .catch(function(error) {
          // Lida com erros durante a requisição
          // ...
        });
    }

    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }

    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");

      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value === "" || (y[i].type === "checkbox" && !y[i].checked)) {
          // add an "invalid" class to the field:
          y[i].classList.add("invalid");
          // and set the current valid status to false
          valid = false;
        }
      }

      // Obtém todos os elementos <select> na página
      var selectElements = x[currentTab].getElementsByTagName("select");

      // Adiciona um manipulador de eventos para cada elemento <select>
      for (var j = 0; j < selectElements.length; j++) {
        selectElements[j].addEventListener("change", function() {
          this.classList.remove("invalid");
        });

        // Validar o select
        if (selectElements[j].value === "") {
          selectElements[j].classList.add("invalid");
          valid = false;
        }
      }

      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].classList.add("finish");
      }

      return valid; // return the valid status
    }


    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }
  </script>


</body>

</html>