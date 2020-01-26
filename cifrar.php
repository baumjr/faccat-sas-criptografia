<?php
$CHAVE_RANDOMICA = md5(base64_encode('Uma Senha Dificil de Quebrar'));//criar uma função que gere uma chave randômica
//
$METODO_DE_CRIPTOGRAFIA = isset($_POST['algoritmo']) ? $_POST['algoritmo'] : '2';
$IV = ($METODO_DE_CRIPTOGRAFIA == 'des')||($METODO_DE_CRIPTOGRAFIA == 'des3') ? "12345678" : "1234567812345678";
$CHAVE_DE_CESAR = isset($_POST['chaveCesar']) ? $_POST['chaveCesar'] : 3;
$texto = $_POST['texto'];
$chave = isset($_POST['chave']) ? $_POST['chave'] : $CHAVE_RANDOMICA;
$metodo = isset($_POST['metodo']) ? $_POST['metodo'] : 'criptografar';
//
require('algoritmo_cifras.php');
//

/* Fluxo Principal */
switch ($metodo) {
  case 'criptografar':
    echo criptografar($texto, $chave);
  break;

  case 'descriptografar':
    echo descriptografar($texto, $chave);
  break;

  default:
    echo 'error';
}
?>
