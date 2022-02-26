<?php
/*ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);*/
include_once 'config.php';
$step = 3;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $marca = $_POST['marca'];
    $carro = $_POST['carro'];
    $ano = $_POST['ano'];
}
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="lib/master.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="body-fipe">
    <section>
        <div class="conteudo">
        <h2>Tabela Fipe do carro</h2>
        <?php
            $resultado = getFipe($step, $marca, $carro, $ano);
            echo "
            <table class='table table-striped'>
              <thead>
                <tr>
                  <th scope='col'>Informações do veículo</th>
                  <th scope='col'>Resultado</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope='row'>Modelo</th>
                  <td>".$resultado->model."</td>
                </tr>
                <tr>
                  <th scope='row'>Marca</th>
                  <td>$resultado->brand</td>
                </tr>
                <tr>
                  <th scope='row'>Ano modelo</th>
                  <td>$resultado->modelYear</td>
                </tr>
                <tr>
                  <th scope='row'>Combustível</th>
                  <td>$resultado->fuel</td>
                </tr>
                <tr>
                  <th scope='row'>Mês de Referência</th>
                  <td>$resultado->referenceMonth</td>
                </tr>
                <tr>
                  <th scope='row'>Código Fipe</th>
                  <td>$resultado->codeFipe</td>
                </tr>
                <tr class='table-primary'>
                  <th scope='col'>Preço</th>
                  <td>$resultado->price</td>
                </tr>
              </tbody>
            </table>";
      
        ?>
          <div style='display:flex !important; justify-content: end !important;'>
            <a href="JavaScript: window.history.back();" class="btn btn-link">Voltar</a>
            <a href="index.php" class='btn btn-primary' id='btn-sub'>Início</a>
          </div>
        </div>
    </section>

    <script>
      
    </script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>

