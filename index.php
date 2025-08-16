<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Preencha seus dados</h2>
        
        <form action="processa.php" method="POST" class="formulario">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>

            <label for="idade">Idade:</label>
            <input type="number" name="idade" id="idade" required>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
