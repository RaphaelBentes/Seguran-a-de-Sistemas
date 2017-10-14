<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $arquivo = $_FILES['arquivo']['tmp_name'];


  		$fp = fopen($arquivo, "r");

  		// Escreve "exemplo de escrita" no bloco1.txt
  		$conteudo = fread($fp, filesize($arquivo));
  		// Fecha o arquivo
      fclose($fp);

          $key = "bcb04b7e103a0cd8b54763051cef08bc";

          $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
          $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);

          $ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $conteudo, MCRYPT_MODE_CBC, $iv);
          $ciphertext = $iv . $ciphertext;
          $ciphertext_base64 = base64_encode($ciphertext);

          $caminho = '../arquivos/arquivo-criptado.txt';
          $cripto = $ciphertext_base64  ;
          if(file_exists($caminho)){
              unlink($caminho);
                $file = fopen($caminho, "a");
                fwrite($file, $cripto);
        		      fclose($file);
                  echo "<br><br> Salve a chave a seguir para descriptar o arquivo:  ".$key."<br>  Quantos as msg de erro não consegui solucionar";
                  echo "<br><br><a href='http://localhost/segura'> Clique aqui para voltar a tela principal</a>";
          }else{
          $file = fopen($caminho, "a");
          fwrite($file, $cripto);
      		fclose($file);

        echo "<br><br> Salve a chave a seguir para descriptar o arquivo:  ".$key."<br>  Quantos as msg de erro não consegui solucionar";
        echo "<br><br><a href='http://localhost/segura'> Clique aqui para voltar a tela principal</a>";
      }
}
?>
