<?php

function getFipe($step, $marca = null, $carro = null, $ano = null){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    if($step == 1){//Obtém Carros da marca
        curl_setopt($ch, CURLOPT_URL, "https://parallelum.com.br/fipe/api/v2/cars/brands/{$marca}/models");
        $resultado = json_decode(curl_exec($ch));
        return $resultado;
    }else if($step == 2){//Obtém Anos dos Carros
        curl_setopt($ch, CURLOPT_URL, "https://parallelum.com.br/fipe/api/v2/cars/brands/$marca/models/$carro/years");
        $resultado = json_decode(curl_exec($ch));
        return $resultado;
    }else if($step == 3){//Obtém Fipe info
        curl_setopt($ch, CURLOPT_URL, "https://parallelum.com.br/fipe/api/v2/cars/brands/$marca/models/$carro/years/$ano");
        $resultado = json_decode(curl_exec($ch));
        return $resultado;
    }else{//Obtém Marca
        curl_setopt($ch, CURLOPT_URL, "https://parallelum.com.br/fipe/api/v2/cars/brands");
        $resultado = json_decode(curl_exec($ch));
        return $resultado;
    }
    curl_close();
}
?>