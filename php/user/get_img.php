<?php

session_start();
/******
 * Upload de imagens
 ******/
 
// verifica se foi enviado um arquivo
if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {
 
    $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
    $nome = $_FILES[ 'arquivo' ][ 'name' ];
 
    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
    $extensao = strtolower ( $extensao );
 
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = uniqid ( time () ) . '.' . $extensao;
 
        // Concatena a pasta com o nome
        $destino = '../../img/' . $novoNome;

        require_once("../../connection/connection.php");
        $database = connection_db();
        $query = mysqli_query($database,"UPDATE users SET url_img=\"img/".$novoNome."\"'' WHERE id_user=".$_SESSION["id"].";") or die("<body onLoad=\"alert('Erro contate o programador!')\"");
        array_map('unlink', glob("../../".$_SESSION['img']));
        $_SESSION['img'] = "img/".$novoNome;
 
        // tenta mover o arquivo para o destino
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
            echo "<body onLoad=\"alert('Foto alterada com sucesso!');window.location='../../pages/your_profile.php'\">";
        }
        else{
        echo "<body onLoad=\"alert('Imagem não alterada, contate o programador!');window.location='../../pages/your_profile.php'\">";
    }
}

}
    ?>