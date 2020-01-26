<!DOCTYPE html>
<html>
  <head>
    <title>Criptografia - Segurança e Auditoria de Sistemas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
  </head>
  <body>
  	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.php">Algoritmos de Criptografia</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="index.php">Principal</a></li>
              <li class="dropdown active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">História <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="aes.php">AES</a></li>
                  <li><a href="des.php">DES</a></li>
                  <li><a href="des3.php">3DES</a></li>
                  <li class="divider"></li>
                  <li><a href="cesar.php">Cifra de Cesar</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <h1>Algoritmo 3DES</h1>
      <p>Um ataque teórico, decriptoanálise linear, foi  publicado em 1994, e um ataque porforça brutaem 1998 que demonstrou  que o DES poderia ser atacado e exaltou a necessidade de um algoritmo que  
      substituísse o DES. </p>

      <p>Com estas preocupações sobre a segurança e a operação  relativamente lenta do DES, pesquisadores motivaram-se a propor uma variedade  de alternativas para a cifragem em bloco, que começaram 
       a aparecer no final dos  anos 1980 e início dos anos 1990. Até mesmo o próprio DES pode ser adaptado  para ser usado de modo mais seguro. Muitos ex-usuários de DES agora utilizam o3DES(também  
       conhecido como TDES) que foi descrito e analisado por um dos patenteadores do  DES; este algoritmo envolve aplicar o DES três vezes com duas (2TDES) ou três  (3TDES) chaves diferentes. TDES é 
       considerada adequadamente segura, embora seja  bastante lenta.  Em 19 de Maio de 2005, aNISTaprovou  o &quot;Triplo DES&quot; até o ano 2030 para informações sensíveis do governo. </p>
    </div> <!-- /container -->

    <!-- Javascript
    ================================================== -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    

  </body>
</html>
