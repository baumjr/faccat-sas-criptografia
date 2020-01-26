<?php

function aplicarCriptografia($textoLimpo, $chave) {
  global $METODO_DE_CRIPTOGRAFIA, $IV;
  $criptografado = openssl_encrypt($textoLimpo, $METODO_DE_CRIPTOGRAFIA, $chave, true, $IV);
  return $criptografado;
}

function removerCriptografia($textoCifrado, $chave){
  global $METODO_DE_CRIPTOGRAFIA, $IV;
  $descriptografado = openssl_decrypt($textoCifrado, $METODO_DE_CRIPTOGRAFIA, $chave, true, $IV);
  return $descriptografado;
}

function cifraDeCesar($texto, $chave, $metodo = 'aplicar') { //$metodo = aplicar|remover
  $arrayLetras = str_split($texto);
  if($metodo == 'remover') $chave = $chave*(-1);
  foreach ($arrayLetras as $key => $letra) {
    $arrayResultante[$key] = ord($letra) + $chave;
    /*CONTROLE: caso a cifra ultrapasse a range da tabela ascii(menor que 32[espaço] ou maior que 126[~]) faz o giro */
    if ($arrayResultante[$key] > 126) $arrayResultante[$key] = $arrayResultante[$key] -95;
    if ($arrayResultante[$key] < 32) $arrayResultante[$key] = $arrayResultante[$key] +95; //(-126+32) 
    /* Codifica em ASCII novamente */    
    $arrayResultante[$key] = chr($arrayResultante[$key]);
  }
  $stringResultante = implode('', $arrayResultante);
  return $stringResultante;
}

function criptografar($texto, $chave = null){
  global $CHAVE_DE_CESAR, $CHAVE_RANDOMICA;
  if (is_null($chave)) $chave = $CHAVE_RANDOMICA;
  $cifrado = cifraDeCesar($texto, $CHAVE_DE_CESAR);  
  $cifrado = aplicarCriptografia($cifrado, $chave);
  $cifrado = base64_encode($cifrado);
  return $cifrado;
}

function descriptografar($texto, $chave = null){
  global $CHAVE_DE_CESAR, $CHAVE_RANDOMICA;
  if (is_null($chave)) $chave = $CHAVE_RANDOMICA;
  $descifrado = base64_decode($texto);  
  $descifrado = removerCriptografia($descifrado, $chave);  
  $descifrado = cifraDeCesar($descifrado, $CHAVE_DE_CESAR, 'remover');
  return $descifrado;
}

?>
