<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">

    <title>Exercicio 7 !</title>
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
    
        <!-- exercico 7-->
      <h1 class="display-4 text-muted">exercicio 7</h1>
     
     <form method="post" action="#" class="form-inline">
      <div class="form-group mb-2">
        <div class="col-sm-5">
          <input type="number" name="valor" class="form-control"  placeholder="Digite um valor" /> 
        </div>
      </div>

      <div class="col-sm-5">
	     	<input type="submit" class="btn btn-primary"  value="verificar cédulas" />	
      </div>      
	   </form>
    
      
      <?php
        //echo "<h1 class='titulo' > exercicio 7 </h1>"
         
        $valor = isset($_POST["valor"])?$_POST["valor"]:""; 

        $cedula100 = $valor/100;
        $valor%=100;

        $cedula50 = $valor/50;
        $valor%=50;

        $cedula20 = $valor/20;
        $valor%=20;

        $cedula10 = $valor/10;
        $valor%=10;

        $cedula5 = $valor/5;
        $valor%=5;

        $cedula2 = $valor/2;
        $valor%=2;

        $cedula1 = $valor/1;
        $valor%=1;


        echo "CÉDULAS:";
        echo " <br>nota(s) de R$100,00: " . floor($cedula100);
        echo " <br>nota(s) de R$50,00: " . floor($cedula50);
        echo " <br>nota(s) de R$20,00: " . floor($cedula20);
        echo " <br>nota(s) de R$10,00: " . floor($cedula10);
        echo " <br>nota(s) de R$5,00: " . floor($cedula5);
        echo " <br>nota(s) de R$2,00: " . floor($cedula2);
        echo " <br>nota(s) de R$1,00: " . floor($cedula1);     

        

      
      
      ?>
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