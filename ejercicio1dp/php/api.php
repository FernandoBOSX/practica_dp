<?php

header('Content-Type: application/json');

$nf = $_POST['nombrefuncion'];

if ($nf == "generarJson"){
 generarJson();
}

function generarJson()
{
    $url = "https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items";

    $client = curl_init($url);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($client);
    $resultado = json_decode($response,true);
    //var_dump($resultado);
    $i = 0;
    foreach ($resultado as $clave => $elemento) {
        
        if($elemento['color'] != 'green'){
        unset($resultado[$i]);
    }
    $i++;
    }

    if(!$resultado) {
    echo "No se encontro info!";
    return 0;
    }
    else
    {
        echo "<script>console.log('Resultado JSON: " . json_encode($resultado) . "' );</script>";
        file_put_contents("Respuesta1.json", json_encode($resultado));
        return 1;
    }
}

 ?>