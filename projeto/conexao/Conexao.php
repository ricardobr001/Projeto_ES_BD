<?php
  final class Connection{
    //Abrindo a conexao com o banco de dados
    public static function open(){
      $conn = mysqli_connect('localhost:3306','root','','ES/BD');

      //Caso a conexão não tenha ocorrido corretamento
      if (!$conn){
        //Coloca que a variavel é nula
        $conn = null;
      }

      //Retornando o resultado a abertura da conexao
      return $conn;
    }

    //Fechando a conexao com o banco
    public static function close($conn){
      mysqli_close($conn);
    }
  }
?>
