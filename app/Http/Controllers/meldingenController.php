<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$capaciteit = $_POST['capaciteit'];
$type = $_POST['type'];
$melder = $_POST['melder'];
if(isset($_POST['prioriteit']))
{
    $prioriteit = 1;
}
else
{
    $prioriteit = 0;
}
$overige_info = $_POST['overige_info'] ?? '';

echo $attractie . " / " . $capaciteit . " / " . $melder;

//1. Verbinding
require_once '../../../config/conn.php';

//2. Query
$query = "INSERT INTO meldingen (attractie, capaciteit, melder, type, prioriteit, overige_info) VALUES (:attractie, :capaciteit, :melder, :type, :prioriteit, :overige_info)";

//3. Prepare
$statement = $conn->prepare($query);
//4. Execute
$statement->execute([
":attractie" => $attractie,
":capaciteit" => $capaciteit,
":melder" => $melder,
":type" => $type,
":prioriteit" => $prioriteit !== null,
":overige_info" => $overige_info,
]);

header("Location:../../../resources/views/meldingen/index.php?msg=Melding Opgeslagen");
