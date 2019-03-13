<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">

    <title>Exercicio 6 !</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">
               <img src="images/Logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
              Exercicios
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
         </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
       <a class="nav-item nav-link active" href="index.php">Home</a>
        
      <a class="nav-item nav-link" href="exercicio1.php">Exercicio1</a>
      <a class="nav-item nav-link" href="exercicio2.php">Exercicio2</a>
      <a class="nav-item nav-link" href="exercicio3.php">Exercicio3</a>
      <a class="nav-item nav-link" href="exercicio4.php">Exercicio4</a>
      <a class="nav-item nav-link" href="exercicio5.php">Exercicio5</a>
      <a class="nav-item nav-link" href="exercicio6.php">Exercicio6</a>
      <a class="nav-item nav-link" href="exercicio7.php">Exercicio7</a>
      <a class="nav-item nav-link" href="exercicio8.php">Exercicio8</a>  
      <a class="nav-item nav-link" href="exercicio9.php">Exercicio9</a> 
        
        
    </div>
  </div>
</nav>
    
        <!-- exercico 6-->
      <div class="container center my-3">
      <h1 class="display-4 text-muted">Exercicio 6</h1>
     
     <form method="post" action="#" class="form-inline">
      <div class="form-group mb-2">
        <div class="col-sm-5">
          <input type="text" name="nomeTime1" class="form-control"  placeholder="digite o nome do 1° time" /> 
        </div>
      </div>

      <div class="form-group mb-2">
        <div class="col-sm-5">
          <input type="number" name="placarTime1" class="form-control" placeholder="digite o placar do 1° time" />
        </div>
      </div>

      <div class="form-group mb-2">
        <div class="col-sm-5">
          <input type="text" name="nomeTime2" class="form-control"  placeholder="digite o nome do 2° time" /> 
        </div>
      </div>

      <div class="form-group mb-2">
        <div class="col-sm-5">
          <input type="number" name="placarTime2" class="form-control" placeholder="digite o placar do 2° time" />
        </div>
      </div>

      <div class="col-sm-5">
	     	<input type="submit" class="btn btn-primary"  value="ver total :" />	
      </div>      
	   </form>
    
      
      <?php
        //echo "<h1 class='titulo' > exercicio 6 </h1>"
         
        $nomeTime1 = isset($_POST["nomeTime1"])?$_POST["nomeTime1"]:""; 
        $placarTime1 = isset($_POST["placarTime1"])?$_POST["placarTime1"]:""; 
        $nomeTime2 = isset($_POST["nomeTime2"])?$_POST["nomeTime2"]:""; 
        $placarTime2 = isset($_POST["placarTime2"])?$_POST["placarTime2"]:""; 

        if (isset($_POST["nomeTime1"]))
        {
          if ($placarTime1>$placarTime2){
            echo "Vencedor: $nomeTime1";
          }
          elseif ($placarTime2>$placarTime1){
            echo "Vencedor: $nomeTime2";
          }
          else{
            echo "Empate!";
          }
        }       
      
      ?>
      </div>
      
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      
      <footer class="footer fixed-bottom py-3 bg-dark text-light text-center">
           
            <p class="mb-0">&copy; Direitos reservados, Breno , James e Vania </p>
          
        </footer>
        
  </body>
</html>