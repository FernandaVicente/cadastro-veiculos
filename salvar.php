<?php
include 'conexao.php';

$placa = $_POST['placa'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$ano_fabricacao = $_POST['ano_fabricacao'];
$ano_modelo = $_POST['ano_modelo'];
$cor = $_POST['cor'];
$combustivel = $_POST['combustivel'];
$quilometragem = $_POST['quilometragem'];
$chassi = $_POST['chassi'];
$renavam = $_POST['renavam'];
$data_cadastro = $_POST['data_cadastro'];
$observacoes = $_POST['observacoes'];

$sql = "INSERT INTO veiculos (
placa,
marca,
modelo,
ano_fabricacao,
ano_modelo,
cor,
combustivel,
quilometragem,
chassi,
renavam,
data_cadastro,
observacoes
)
VALUES (
'$placa',
'$marca',
'$modelo',
'$ano_fabricacao',
'$ano_modelo',
'$cor',
'$combustivel',
'$quilometragem',
'$chassi',
'$renavam',
'$data_cadastro',
'$observacoes'
)";

if ($conexao->query($sql) === TRUE) {
    echo "Veículo cadastrado com sucesso! <br><br>";
    echo "<a href='index.php'>Voltar</a>";
} else {
    echo "Erro: " . $conexao->error;
}
?>