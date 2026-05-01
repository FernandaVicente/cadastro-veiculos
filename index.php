<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Cadastro de Veículos</h1>

    <form action="salvar.php" method="POST">

        <input type="text" name="placa" placeholder="Placa" required>

        <input type="text" name="marca" placeholder="Marca" required>

        <input type="text" name="modelo" placeholder="Modelo" required>

        <input type="number" name="ano_fabricacao" placeholder="Ano de Fabricação" required>

        <input type="number" name="ano_modelo" placeholder="Ano do Modelo" required>

        <input type="text" name="cor" placeholder="Cor" required>

        <input type="text" name="combustivel" placeholder="Combustível" required>

        <input type="number" name="quilometragem" placeholder="Quilometragem" required>

        <input type="text" name="chassi" placeholder="Chassi" required>

        <input type="text" name="renavam" placeholder="Renavam" required>

        <input type="date" name="data_cadastro" required>

        <textarea name="observacoes" placeholder="Observações" required></textarea>

        <button type="submit">Cadastrar</button>

    </form>

    <a href="listar.php">Ver veículos cadastrados</a>
</div>

</body>
</html>