<html>
    <?php
    // Seleciona uma dica aleatória do banco de dados
    include('conexao.php');
    $query = "SELECT * FROM dica_usuario ORDER BY RAND() LIMIT 1";

    $result = mysqli_query($conexao, $query);

    $row = mysqli_fetch_row ($result);

    $texto = $row[1];
    ?>
    <!-- Insere o texto no template para envio ao usuário -->
    <body>
        <h2>Olá, esta é a dica do dia:</h2>
        <?php echo($texto)?>
    </body>
</html>