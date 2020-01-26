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

      <h1>Algoritmo DES</h1>

      <p>A criptografia DES teve seu surgimento no início da década  de 1970, quando o governo norte-americano fez um estudo sobre as necessidades  de segurança de informação e identificou a necessidade de um 
      padrão  governamental para criptografia de informações não confidenciais, porém  sensíveis. Em consequência disso, o NBS(National  Bureau of Standards) solicitou propostas para umalgoritmode  criptografia 
      que atendesse a critérios rigorosos de projeto.  Somente em uma segunda edição do evento, que  surgiu uma proposta que foi considerada aceitável vinda da IBM. Tratava-se de  um algoritmo de criptografia 
      desenvolvido no  período de 1973-1974 baseado num algoritmo mais antigo, o algoritmo Lúcifer deHorst  Feistel.</p>

      <p>Em17 de Marçode1975o DES foi  publicado noRegistro Federal. Foram pedidos comentários públicos e no ano  seguinte ocorreram dois seminários para discutir. Houve diversas críticas  incluindo por parte dos 
      pioneiros da &quot;Criptografia de chave pública&quot;,Martin  HellmaneWhitfield Diffie. Eles criticavam o pequeno tamanho dachavee  os misteriosos &quot;S-boxes&quot; como uma evidência de interferência 
      da NSA  no design do algoritmo. Houve a suspeita de um possível enfraquecimento no  algoritmo de forma que a NSA (e somente ela) pudesse ler facilmente as  mensagens criptografadas.No entanto, em 1978, o 
      Comitê de Inteligência  dos EUA concluiu que o algoritmo poderia funcionar com o pequeno tamanho de  chave e que estava provado que o DES estava livre de fragilidades estatísticas  e matemáticas. Foi 
      concluído também que a NSA não teve envolvimento no  desenvolvimento do algoritmo. A IBM inventou e desenvolveu o algoritmo, tomando  todas as decisões pertinentes e concordou que o tamanho da chave seria 
      mais do  que o suficiente para aplicações comerciais do DES. Outro membro da equipe  desenvolvedora, Walter Tuchman afirmou que a NSA nunca esteve envolvida no  desenvolvimento do algoritmo.</p>

      <p>A suspeitas sobre a fragilidade nas &quot;S-boxes&quot;  foram acalmadas em 1990 com a descoberta independente e publicação aberta deEli  BihameAdi Shamirsobrecriptoanálise diferencial, um  método genérico 
      de quebra de criptografia. Os &quot;S-boxes&quot; eram muito  mais resistentes à ataques do que se eles fossem selecionados aleatoriamente,  sugerindo fortemente que a IBM sabia da técnica antes de 1970.
      Isto foi motivo  de uma publicação em 1994 de Don Coppersmith para os &quot;S-boxes&quot;.De  acordo comSteven Levy, as pesquisas da IBM descobriram ataques decriptoanálise  diferenciale pediram para que 
      a NSA mantivesse a técnica secreta.Coppersmith  explicou a decisão secreta da IBM dizendo que &quot;era porque acriptoanálise  diferencialpoderia ser uma ferramente muito potente usada contra muitos  
      esquemas, e havia preocupação de que algumas informações em domínio público  poderia afetar significativamente a segurança nacional.&quot; Levy citou Walter  Tuchman: &quot;Eles nos pediram para selar todos
        os documentos  confidencialmente…Nos de fato colocamos um número em cada e lacramos eles em  cofres.&quot;</p>
        
      A outra crítica — que o tamanho da chave era muito pequeno —  foi apoiado pelo fato de que o motivo dado pela NSA para reduzir o tamanho da  chave de 64 bits para 56 foi que os outros 8 bits poderiam servir 
      como bits de  paridade. Acreditou-se que a decisão da NSA foi motivada pela possibilidade de  que eles poderiam atacar porforça brutauma chave de 56 bits vários  anos antes do que o resto do mundo.</p>

      <p>Apesar das diversas críticas, DES foi aprovado pelo governo  dos EUA como padrão em 1976 e publicado em 15 de janeiro de 1977 comoFIPS  PUB 46, autorizado a ser utilizado. Foi subsequentemente reafirmado como 
      padrão  em 1983, 1988 (revisado comoFIPS-46-1), 1993 (FIPS-46-2), e novamente em  1999 (FIPS-46-3), o último prescrito &quot;Triplo DES&quot;. Em 26 de Maio de  2002, DES foi finalmente substituído pelo 
      AES(Advanced Encryption  Standard|AES) após uma competição pública. Mesmo assim até 2004 os restos do  DES continuaram a ser utilizados em larga escala. Em 19 de Maio de 2005, FIPS  46-3 foi oficialmente 
      substituído, mas aNISTaprovou o &quot;Triplo  DES&quot; até o ano 2030 para informações sensíveis do governo.</p>

      <p>Um outro ataque teórico,criptoanálise linear, foi  publicado em 1994, mas foi um ataque porforça brutaem 1998 que  demonstrou que o DES poderia ser atacado e exaltou a necessidade de um  algoritmo que 
      substituísse o DES. </p>

      <p>A introdução do DES é considerada catalisadora para o estudo  acadêmico da criptografia, particularmente de métodos de quebra de blocos de  cifragem. De acordo com uma retrospectiva da 
      NIST sobre o DES,</p>

      <p>O DES pode ser considerado o lançamento inicial de um estudo  e desenvolvimento não militar de algoritmos de criptografia. Em 1970 havia  muito poucos métodos de criptografia, a não ser os em 
      organizações militares e  de inteligência, e muito pouco estudo acadêmico sobre criptografia. Atualmente  há muitos acadêmicos estudando criptografia, departamentos matemáticos com  programas 
      poderosos em criptografia, e segurança em informações comerciais de  companhias e consultores. Uma geração de criptoanalistas perdeu noites de sono  analisando (ou seja, 
      tentando &quot;crackear&quot;) o algoritmo DES. Nas  palavras do especialista em segurançaBruce Schneier(Bruce Schneier,  Applied Cryptography, Protocols, Algorithms, and Source Code in C, 
      Second  edition, John Wiley and Sons, New York (1996) p. 267). &quot;O DES fez mais  pelo campo de criptoanálise do que qualquer outro. Agora há um algoritmo para  estudar.&quot; Uma quantidade 
      incrível da literatura sobre criptografia nos  anos 1970 e 80 discutiam sobre o DES, e o DES é o algoritmo base para qualquer  comparação entre algoritmos de chave simétrica. </p>
    </div> <!-- /container -->

    <!-- Javascript
    ================================================== -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
