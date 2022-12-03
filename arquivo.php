<?php
$arquivo = fopen("clientes.txt", "w");

$listaclientes = [
    [
        "nome" => "Luiz <br>",
        "idade" => 19
    ],
    [
        "nome" => "Bia <br>",
        "idade" => 17
    ]
];

print_r($listaclientes[0]["nome"]);
print_r($listaclientes[0]["idade"]);
echo "<br>";

for ($i = 0; $i < count($listaclientes); $i++){
    fwrite($arquivo, $listaclientes[$i]["nome"]. "\n");
    fwrite($arquivo, $listaclientes[$i]["idade"]. "\n");
}

fclose($arquivo);
?>