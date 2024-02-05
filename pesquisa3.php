<?php 
    include_once ('viacep.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultando Informações</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <main>

        <section class="sForms2">
            
            <?php
            
                $nome = htmlspecialchars($_GET['nome']);
                echo "<h1 class='h1p3'>$nome, estamos consultando seu endereço, confira abaixo:</h1>";

            ?>

            <form action="pesquisa3.php" method="get">

                <label for="cep">CEP:</label>
                <input type="text" name="cep" id="cep" value="<?php echo $endereco->cep ?? 'não encontrado' ?>">

                <label for="estado">Estado:</label>
                <input type="text" name="estado" value="<?php echo $endereco->uf  ?? 'não encontrado' ?>">
                
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" value="<?php echo $endereco->localidade  ?? 'não encontrado' ?>">
                
                <label for="rua">Rua:</label>
                <input type="text" name="rua" value="<?php echo $endereco->logradouro ?? 'não encontrado' ?>">
                
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" value="<?php echo $endereco->bairro ?? 'não encontrado' ?>">
                
            </form>

            <?php 

                date_default_timezone_set("America/Sao_Paulo");
                $dataAtual = date("d/m/Y");
                $horaAtual = date("G:i:s");

                echo "<br> <br> <div class='datahora'> Hoje é dia $dataAtual e suas informações foram enviadas às $horaAtual </div>";     

            ?>

        </section>

    </main>

</body>

</html>
