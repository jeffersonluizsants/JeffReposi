<?php
include "conexao.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $data = htmlspecialchars($_POST["data"]);
    $doom = htmlspecialchars($_POST["destino"]);
    $carta = htmlspecialchars($_POST["carta"]);
    $tipo = htmlspecialchars($_POST["tipo"]);
    $number = htmlspecialchars($_POST["number"]);


    echo "<h2> Carta enviada </h2>";
    echo "Data: $data <br>";
    echo "Destino: $doom <br>";
    echo "Quantidade de cartas: $number <br>";
    echo "Carta: $tipo $carta <br>";


    $data = $conexao->real_escape_string($data);
    $doom = $conexao->real_escape_string($doom);
    $carta = $conexao->real_escape_string($carta);
    $tipo = $conexao->real_escape_string($tipo);
    $number = $conexao->real_escape_string($number);

    $sql = "INSERT INTO cartas(data_envio, destinatario, quantidade, carta, tipo) VALUES ('$data','$doom','$number','$carta','$tipo')";

    if($conexao->query($sql) === TRUE){
        echo "Carta adicionada com sucesso!";
    }else{
        echo "Erro ao adicionar a carta: ".$conexao->error;
    }

    $conexao->close();
} else{
    echo "Vazio";
}

?>
