<?php

include_once 'config.php';
$step = 1;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $marca = $_POST['marca'];
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
        <h2>Tabela Fipe do seu carro</h2>
          <form action="fipe2.php" method='post'>
            <label for='exampleDataList' class='form-label'>Selecione o modelo do seu carro</label>
            <select class='form-select form-select-md mb-3' aria-label='.form-select-lg example' name='carro'>
              <?php
                $resultado = getFipe($step, $marca);
                foreach($resultado as $i) {
                    echo    "<option value='".$i->code."'>".$i->name."</option>";
                }
              ?>
            </select>
            <input type='hidden' name='marca' value='<?php echo $marca ?>'>
            <div style='display:flex !important; justify-content: end !important;'>
              <a href="JavaScript: window.history.back();" class="btn btn-link">Voltar</a>
              <button class='btn btn-primary' id='btn-sub' type='submit'>Próximo</button>
            </div>
          </form>   
        </div>
    </section>

    <script>
      
    </script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>

