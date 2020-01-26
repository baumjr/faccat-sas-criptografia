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

      <h1>Cifra de Cesar</h1>
      <p>	A cifra de César recebeu este nome em homenagem  a Júlio César que, segundo informações, a utilizava com uma troca de três  posições para proteger mensagens de significado militar. Apesar que esta tenha 
      sido a primeira criptografia a ser registrada, sabe-se que já existiram algumas  anteriormente.</p>

      <p> Não se sabe o quão efetiva era a cifra  de César naquela época, mas é provável que fosse razoavelmente segura, ainda  mais porque a maioria dos inimigos de César eram analfabetose outros  presumiam que 
      as mensagens estavam escritas em uma língua estrangeira  desconhecida. Mesmo que algum inimigo pudesse ler a mensagem, não existem  registros daquela época de nenhuma técnica que solucionasse cifras de  
      substituição simples. </p>

      <p> No século XIX, a seção de anúncios pessoais nos jornais  era por vezes utilizada para trocar mensagens criptografadas usando esquemas  simples de criptografia.Kahn(1967) descreve alguns exemplos de  amantes
         utilizando comunicações secretas criptografadas usando a cifra de César  noThe Times.Até mesmo em1915, a cifra de César continuava em  uso: oexército russoempregou-a em substituição às cifras mais  
         complicadas que provaram serem muito difíceis de suas tropas entenderem; no  entanto, criptoanalistas alemães e austríacos tiveram pouca dificuldade  em descriptografar suas mensagens. </p>

      <p> Atualmente, cifras de César podem ser encontradas embrinquedosinfantis,  como osanéis decodificadores. Uma troca de César de treze posições é  também executada noalgoritmoROT13, um método simples de ofuscar 
        o  texto amplamente encontrado emUNIXe usado para obscurecer o text,  mas não como método de criptografia). A cifra de Vigenère utiliza a cifra de  César, com algumas modificações. </p>

      <p> Em abril de2006, o chefe damáfiaforagidoBernardo  Provenzanofoi capturado naSicíliaem parte devido acriptoanálisede  suas mensagens escritas em uma variação da cifra de César. A cifra de  Provenzano usava 
      números, então &quot;A&quot; seria escrito como &quot;4&quot;,  &quot;B&quot; como &quot;5&quot;, e assim por diante. </p>
    </div> <!-- /container -->

    <!-- Javascript
    ================================================== -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    

  </body>
</html>
