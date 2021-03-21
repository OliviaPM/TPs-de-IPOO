<?php

/*Se confecciona una colección de vinos de las tres variedades: Malbec, Cabernet Sauvignon y Merlot. 
Se incluye la cantidad de botellas, el año de producción (cosecha) y el precio de cada una de las botellas. */

$vinoteca = [];
$vinoteca = [
    "malbec" => [
        ["cantidad" => "20", "cosecha" => "2011", "precio por unidad" => "2150"],
        ["cantidad" => "14", "cosecha" => "2013", "precio por unidad" => "1980"],
        ["cantidad" => "6", "cosecha" => "2014", "precio por unidad" => "1800"],
        ["cantidad" => "13", "cosecha" => "2016", "precio por unidad" => "1560"],
        ["cantidad" => "19", "cosecha" => "2018", "precio por unidad" => "1450"]
    ],

    "cabernet" => [
        ["cantidad" => "12", "cosecha" => "2012", "precio por unidad" => "2300"],
        ["cantidad" => "15", "cosecha" => "2013", "precio por unidad" => "2140"],
        ["cantidad" => "9", "cosecha" => "2014", "precio por unidad" => "2010"],
        ["cantidad" => "13", "cosecha" => "2016", "precio por unidad" => "1950"],
        ["cantidad" => "8", "cosecha" => "2017", "precio por unidad" => "1730"]
    ],

    "merlot" =>[
        ["cantidad" => "16", "cosecha" => "2014", "precio por unidad" => "1520"],
        ["cantidad" => "11", "cosecha" => "2016", "precio por unidad" => "1300"],
        ["cantidad" => "13", "cosecha" => "2018", "precio por unidad" => "1240"],
        ["cantidad" => "9", "cosecha" => "2019", "precio por unidad" => "1180"],
        ["cantidad" => "14", "cosecha" => "2020", "precio por unidad" => "950"]
    ]
];


function cantYprecioprom ($vinoteca) {

    foreach ($vinoteca as $key => $value) {
        echo "tipo de vino: " . $key."\n";
        $cantidadTotal= 0;
        $precioTotal=0;
        $indices = count($vinoteca[$key]);
            for ($i = 0; $i < $indices; $i++) {
                $cantidadTotal = $cantidadTotal + ($vinoteca[$key][$i]["cantidad"]);
                $precioTotal = $precioTotal + (($vinoteca [$key] [$i] ["precio por unidad"]) * ($vinoteca [$key] [$i] ["cantidad"]));
            }
        $precioPromedio = $precioTotal / $cantidadTotal; 
        echo "la cantidad total de botellas de ".$key. " es: " . $cantidadTotal . "\n";
        echo "el precio total de la variedad ".$key. " es de: $".$precioTotal. "\n";
        echo "el precio promedio por cada botella es de: $". round ($precioPromedio). "\n";

       $arreglo = [];
    }
    return $arreglo;

}

cantYprecioprom($vinoteca);
