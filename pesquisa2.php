<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas-Vindas</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <main>

        <section class="sForm">
            
            <?php

                $nome = isset($_GET["nome"]) ? htmlspecialchars($_GET["nome"]) : "";

                echo "<h1>Olá $nome, seja bem-vindo(a).</h1>";
            ?>

            <form method="get" action="pesquisa3.php">

                <input type="hidden" name="nome" value="<?php echo $nome; ?>">

                <label for="cep">Informe seu CEP</label>
                <input type="text" name="cep" id="cep" required>
                
                <div class="cxbtns">
                    <button> <a href="javascript:history.go(-1)"> Voltar </a> </button>
                    <input type="submit" value="Enviar" class="btn_voltar">
                </div>

            </form>

        </section>

    </main>

</body>

</html>
