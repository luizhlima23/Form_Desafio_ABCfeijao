<?php

session_start();
include_once('config.php');


if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['email']) == true)) {

  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: login.php');
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <script type="text/javascript" src="jquery-1.7.1.min.js"></script>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Desafio Maxima Produtividade</title>

</head>

<body>
<svg class="bg_color">
		<rect id="bg_color" rx="0" ry="0" x="0" y="0" width="100%" height="100%">
		</rect>
	</svg>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Inscrição - Desafio máxima produtividade</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="d-flex">
      <a href="logout.php" class="btn btn-danger me-5">Sair</a>
    </div>
  </nav>


  <form id="regForm" action="">


    <!-- One "tab" for each step in the form: -->
    <div class="tab">
      <h2>1 - Dados iniciais:</h2>
      <p><input placeholder="Produtor - CPF/CNPJ ou email" oninput="this.className = ''" name="prod_cpf"></p>
      <p><input type="checkbox" oninput="this.className = ''" id="comfirm01" name="comfirm01" value="true" style="width: auto;"><label for="comfirm01">Declaro que o proprietario deste CPF/CNPJ ou email está ciennte que será relacionado a esta inscrição.</label>
      </p>
      <p><input placeholder="Consultor - CPF/CNPJ ou email" oninput="this.className = ''" name="consult_cpf"></p>
      <p><input type="checkbox" oninput="this.className = ''" id="comfirm01" name="comfirm01" value="true" style="width: auto;"><label for="comfirm01">Declaro que o proprietario deste CPF/CNPJ ou email está ciennte que será relacionado a esta inscrição.</label>
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
        <input style="width: 50%;" placeholder="Nome da propriedade" oninput="this.className = ''">
        <input style="width: 35%;" placeholder="Cidade" oninput="this.className = ''">
      </p>
      <p>
      <table>
        <tr>
          <td><label for="estados">Estado</label><br></td>
          <td><label for="tamanho_pr">Tamanho da propriedade</label></td>
          <td><label for="area_ctv">Área cultivada com feijão irrigado</label></td>
        </tr>
        <tr>
          <td>

            <select id="estados" onchange="validateForm()" required>
              <option value="">UF</option>
              <option value="GO">GO</option>
              <option value="MG">MG</option>
              <option value="SP">SP</option>
              <option value="MT">MT</option>
              <option value="DF">DF</option>
              <option value="PR">PR</option>
            </select>
          </td>
          <td><select id="tamanho_pr" onchange="validateForm()" required>
              <option value="">escolha um tamanho em (há)</option>
              <option value="100">100 há</option>
              <option value="250">250 há</option>
              <option value="500">500 há</option>
              <option value="1.000">1.000 há</option>
              <option value="2.500">2.500 há</option>
              <option value="5.000">5.000 há</option>
              <option value="10.000">10.000 há</option>
              <option value="> 10.000">+ de 10.000 há</option>
            </select></td>
          <td><select id="area_ctv" onchange="validateForm()" required>
              <option value="">escolha a area</option>
              <option value="50">50 há</option>
              <option value="100">100 há</option>
              <option value="150">150 há</option>
              <option value="250">250 há</option>
              <option value="500">500 há</option>
              <option value="1000">1.000 há</option>
              <option value="2500">2.500 há</option>
              <option value="5000">5.000 há</option>
            </select></td>
        </tr>

      </table>

      </p>
      <p><input placeholder="Nome da Gleba/Talhão/Pivô" oninput="this.className = ''"></p>
    </div>

    <div class="tab">3 - Sistema de Produção:
      <p>
        <input placeholder="Cultivar" oninput="this.className = ''">
      </p>
      <p><label for="data_pl">data do plantio</label>
        <input id="data_pl" type="date" placeholder="" oninput="this.className = ''">
      </p>
      <p>
      <table>
        <tr>
          <td><label for="">Sistema de Plantio</label><br></td>
          <td><label for="tamanho_pr">Modelo de produção</label></td>
        </tr>
        <tr>
          <td><select id="sis_plantio">
              <option value="">escolha o sistema</option>
              <option value="">Semeado com botinha</option>
              <option value="">Semeado com disco</option>
            </select>
          </td>
          <td><select id="mod_plantio">
              <option value="">escolha o modelo de plantio</option>
              <option value="">Direto</option>
              <option value="">Convencional</option>
            </select></td>
        </tr>
        <tr>
          <td><label for="cultura_ant">Cultura antecessora</label><br></td>
          <td><label for="temp_exp">Modelo de produção</label></td>
        </tr>
        <tr>
          <td><select id="cultura_ant">
              <option value="">escolha a cultura</option>
              <option value="">Soja</option>
              <option value="">Milho</option>
              <option value="">Milho semente</option>
              <option value="">Milheto</option>
              <option value="">Mix de plantas de cobertura</option>
              <option value="">Arroz</option>
              <option value="">Outra</option>
            </select>
          </td>
          <td><select id="temp_exp">
              <option value="">escolha o tempo de exploração em anos</option>
              <option value="">5 anos</option>
              <option value="">10 anos</option>
              <option value="">15 anos</option>
              <option value="">20 anos</option>
              <option value="">25 anos</option>
              <option value="">30 anos</option>
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
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
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
      } else {
        document.getElementById("nextBtn").innerHTML = "Próximo";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
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