<!DOCTYPE html>
<html>
  <head>
    <title>Criptografia - Segurança e Auditoria de Sistemas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
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
              <li class="active"><a href="index.php">Principal</a></li>
              <li class="dropdown">
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

      <div style="height: 150px;" class="hero-unit">
        <h3>Configurações do algoritmo:</h3>
	<p><label for="algoritmo"><h4 class="text-info">Algoritmo:</h4></label>
            <span style="margin-left: 40px;">
	    <input type="radio" id="algoritmo" name="algoritmo" value="aes-128-cbc" checked><small class="text-success">AES-128 </small>
            <input type="radio" id="algoritmo" name="algoritmo" value="des"><small class="text-success">DES</small>
            <input type="radio" id="algoritmo" name="algoritmo" value="des3"><small class="text-success">3DES</small>
            </span></p>
        <div class="input-prepend input-append">
	    <span class="add-on">Chave:</span>
	    <input class="span4" type="text" id="chave" name="chave">
	</div> 
        <div class="input-prepend input-append">
	    <span class="add-on">Chave de Cesar:</span>
	    <select class="span1" id="chaveCesar" name="chaveCesar">
              <option value="1"> 1 </option>
	      <option value="2"> 2 </option>
    	      <option value="3" selected> 3 </option>
	      <?php for($i=4; $i<=15; $i++) echo '<option value="'.$i.'"> '.$i.' </option>'; ?>
	    </select>
	</div>        
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>Texto Claro</h2>
          <p><textarea id="textoClaro" name="textoClaro" rows="5"></textarea></p>
        </div>
        <div class="span4">
          <h2>Cifrado</h2>
          <p><textarea id="cifrado" name="cifrado" rows="5"></textarea></p>
       </div>
        <div class="span4">
          <h2>Controles</h2>
          <p><a class="btn btn-success" href="javascript:;" onClick="criptografar();">CRIPTOGRAFAR</a></p>
          <p><a class="btn btn-warning" href="javascript:;" onClick="descriptografar();">DESCRIPTOGRAFAR</a></p>
          <p><a class="btn btn-primary" href="javascript:;" onClick="limparCampos();">LIMPAR</a></p>
        </div>
      </div>

      <hr>
      <footer>
        <p style="text-align: center;">Denis, José, Mauricio | Segurança e Auditoria de Sistemas 2013/1 | FACCAT</p>
      </footer>

    </div> <!-- /container -->

    <!-- Javascript
    ================================================== -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      function limparCampos(){
        $('#textoClaro').val('');
        $('#cifrado').val('');
      }

      function criptografar(){
        $.ajax({
          type: "POST",
          url: "cifrar.php",
          data: { 
            algoritmo: $('#algoritmo:checked').val(),
                chave: $('#chave').val(), 
                texto: $('#textoClaro').val(), 
           chaveCesar: $('#chaveCesar').val(), 
               metodo: "criptografar" }
          }).done(function( msg ) {
            if (msg != 'error') {
              $('#cifrado').val(msg);
            }else{
              alert('Um erro ocorreu durante o processamento! Realize o procedimento novamente.');
            }
	      });
      }

      function descriptografar(){
        $.ajax({
	        type: "POST",
	        url: "cifrar.php",
	        data: { 
            algoritmo: $('#algoritmo:checked').val(),
                chave: $('#chave').val(), 
                texto: $('#cifrado').val(), 
           chaveCesar: $('#chaveCesar').val(), 
               metodo: "descriptografar" }
	        }).done(function( msg ) {
            if (msg != 'error') {
	            $('#textoClaro').val(msg);
            }else{
              alert('Um erro ocorreu durante o processamento! Realize o procedimento novamente.');
            }
	      });
      }
    </script>
  </body>
</html>
