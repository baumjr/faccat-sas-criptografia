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

      <h1>Algoritmo AES</h1>

      <p class="pill-content"> Advanced Encryption Standard(AES, ou Padrão de  Criptografia Avançada, em português), também conhecido por Rijndael, é umacifra  de blocoadotada como padrão de criptografia 
      pelo governo dosEstados  Unidos. Espera-se que seja utilizado em todo o mundo e analisada  extensivamente, assim como foi seu predecessor, oData Encryption Standard(DES).  O AES foi anunciado pelo 
      NIST (Instituto Nacional de Padrões e Tecnologia dosEUA)  como U.S. FIPS PUB (FIPS 197) em 26 de Novembro de 2001, depois de 5 anos de um  processo de padronização. </p>
      
      <p class="pill-content"> Em 1997 o governo americano, através do NIST (National  Institute of Standards and Technology), lançou um processo de seleção que  definiria um novo algoritmo de chave simétrica 
      para proteger informações do  governo federal. Este novo algoritmo criptográfico substituiu oDES(Data  Encryption Standard), que havia sido quebrado pela máquinaDES Cracker,  construída pela ONGElectronic 
      Frontier Foundation com apenas 250 mil  dólares. </p>

      <p class="pill-content"> Em setembro de 1997 o NIST indicou as condições necessárias  para a candidatura de algoritmos para substituir o DES: divulgação pública,  direitos autorais livres, e os algoritmos 
      deveriam ser de chave privada  (simétricos) e suportar blocos de 128 bits e chaves de 128, 192 e 256 bits. Em  agosto de 1998, na Primeira Conferência dos Candidatos ao AES, apresentaram-se  15 
      candidatos:Cast-256,Crypton,Deal,DFC,E2,Frog,HPC,LOKI97,Magenta,MARS,RC6,Rijndael,Safer+,SerpenteTwofish.  O NIST solicitou aos membros da comunidade criptográfica mundial uma análise  dos algoritmos 
      candidatos. Em 1999, na Segunda Conferência dos Candidatos AES,  através da análise obtida foram selecionados 5 finalistas:MARS,RC6,Rijndael,SerpenteTwofish.  Posteriormente esses 5 algoritmos sofreram 
      novas análises e seus criadores  participaram de debates, fóruns, etc.</p> 
      
      <p class="pill-content"> Três anos e meio após o início do concurso, o NIST chega à escolha  do vencedor:Rijndael. O nome é uma fusão de Vincent Rijmen e Joan Daemen,  os dois belgas criadores do algoritmo. 
      Segundo o NIST, ele combina as  características de segurança, desempenho, facilidade de implementação e  flexibilidade. O Rijndael apresenta alta resistência a ataques como &quot;power  attack&quot; e 
      &quot;timing attack&quot; e exige pouca memória, o que o torna  adequado para operar em ambientes restritos como &quot;smart cards&quot;, PDAs  e telefones celulares. </p>

      <p class="pill-content"> O Rijndael era um refinamento doSquare, um projeto  anterior de Daemen e Rijmen. O Square, por sua vez, evoluiu doShark. Ao  contrário do seu predecessor DES, o Rijndael é uma rede de 
      permutação-substituição, não umarede de Feistel. O AES é rápido tanto emsoftwarequanto  emhardware, é relativamente fácil de executar e requer pouca memória.  Apesar de ser um padrão novo de criptografia, está 
      sendo atualmente implantado  em grande escala.</p>
    </div> <!-- /container -->

    <!-- javascript
    ================================================== -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
