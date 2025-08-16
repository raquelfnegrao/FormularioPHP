<?php
$nome = $_POST['nome'] ?? 'Não informado';
$idade = $_POST['idade'] ?? 'Não informada';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container resultado">
        <h2>Dados recebidos:</h2>
        <p><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></p>
        <p><strong>Idade:</strong> <?= htmlspecialchars($idade) ?></p>
        <a href="index.php" class="botao-voltar">Voltar</a>
    </div>
</body>
</html>
