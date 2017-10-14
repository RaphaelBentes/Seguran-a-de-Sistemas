<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $arquivo = $_FILES['arquivo']['tmp_name'];
    $key = $_POST['chave'];


  		$fp = fopen($arquivo, "r");
  		$conteudo = fread($fp, filesize($arquivo));
      fclose($fp);

       $ciphertext_dec = base64_decode($conteudo);
       $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
       $iv_dec = substr($ciphertext_dec, 0, $iv_size);


       $ciphertext_dec = substr($ciphertext_dec, $iv_size);

       $plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);


          $caminho = '../arquivos/arquivo-decriptado.txt';
          $cripto = $plaintext_dec  ;
          if(file_exists($caminho)){
              unlink($caminho);
                $file = fopen($caminho, "a");
                fwrite($file, $cripto);
            		fclose($file);
            echo "<br><br><a href='http://localhost/segura'> Clique aqui para voltar a tela principal</a>";
          }else {
              $file = fopen($caminho, "a");
              fwrite($file, $cripto);
              fclose($file);
          echo "<br><br><a href='http://localhost/segura'> Clique aqui para voltar a tela principal</a>";
          }
}
?>
