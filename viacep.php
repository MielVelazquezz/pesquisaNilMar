<?php 

    $cep = $_GET['cep'];
    $url = "https://viacep.com.br/ws/{$cep}/json/";
    $endereco = json_decode(file_get_contents($url))

?>