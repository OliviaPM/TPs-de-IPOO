<?php

/*Se confecciona una Colección de Vinos de las tres variedades: Malbec, Cabernet Sauvignon y Merlot. 
Se indica la cantidad de botellas por año de producción (cosecha) y el precio de cada una de esas botellas. */

$vinoteca = [];
$vinoteca = [
    "Malbec" => [
        ["cantidad" => "20", "cosecha" => "2011", "precio por unidad" => "2150"],
        ["cantidad" => "14", "cosecha" => "2013", "precio por unidad" => "1980"],
        ["cantidad" => "6", "cosecha" => "2014", "precio por unidad" => "1800"],
        ["cantidad" => "13", "cosecha" => "2016", "precio por unidad" => "1560"],
        ["cantidad" => "19", "cosecha" => "2018", "precio por unidad" => "1450"]
    ],

    "Cabernet Sauvignon" => [
        ["cantidad" => "12", "cosecha" => "2012", "precio por unidad" => "2300"],
        ["cantidad" => "15", "cosecha" => "2013", "precio por unidad" => "2140"],
        ["cantidad" => "9", "cosecha" => "2014", "precio por unidad" => "2010"],
        ["cantidad" => "13", "cosecha" => "2016", "precio por unidad" => "1950"],
        ["cantidad" => "8", "cosecha" => "2017", "precio por unidad" => "1730"]
    ],

    "Merlot" =>[
        ["cantidad" => "16", "cosecha" => "2014", "precio por unidad" => "1520"],
        ["cantidad" => "11", "cosecha" => "2016", "precio por unidad" => "1300"],
        ["cantidad" => "13", "cosecha" => "2018", "precio por unidad" => "1240"],
        ["cantidad" => "9", "cosecha" => "2019", "precio por unidad" => "1180"],
        ["cantidad" => "14", "cosecha" => "2020", "precio por unidad" => "950"]
    ]
];


/** Esta función recibe por parámetro la Colección de Vinos y calcula el total de botellas por variedad de vino
 * y el precio promedio de cada una de esas botellas. 
 * Retorna una nueva colección que indica estos datos hallados. 
 * @param array $vinoteca
 * @return array 
 */

function cantYprecioprom ($vinoteca) {
    #STRING $key, $value
    #INTEGER $cantidadTotal, $precioTotal, $indices, $i
    #FLOAT $precioPromedio
    #ARRAY $vinos
    foreach ($vinoteca as $key => $value) { //el FOREACH recorre toda la colección de vinos a partir de la variedad (Malbec, Cabernet y Merlot)
        $cantidadTotal= 0; // contador de botellas
        $precioTotal=0; //sumatoria de precios del total de botellas
        $indices = count($vinoteca[$key]); //contador de posición del arreglo
            for ($i = 0; $i < $indices; $i++) { //el FOR recorre las claves almacenadas dentro de cada variedad de vino (cant., cosecha y precio)
                $cantidadTotal = $cantidadTotal + ($vinoteca[$key][$i]["cantidad"]);
                $precioTotal = $precioTotal + (($vinoteca [$key] [$i] ["precio por unidad"]) * ($vinoteca [$key] [$i] ["cantidad"]));
                //El precio total se obtiene de multiplicar la cantidad de botellas por cada cosecha y el precio de cada una de ellas.                 
            }
        $precioPromedio = $precioTotal / $cantidadTotal;
        $vinos [$key] = ["cantidad total" => $cantidadTotal, "precio promedio" => round ($precioPromedio)];
        //Se genera una nueva Colección de Vinos: por cada variedad se indica la cantidad total de botellas y el precio prom de cada una. 
    }

    return $vinos;
}


/* PROGRAMA PRINCIPAL 
Haciendo uso de la Colección de Vinos se invoca la función correspondiente para obtener una nueva Colección, más acotada que contiene solo 
dos datos por cada variedad de vino: total de botellas y precio promedio de cada una de ellas. */
#ARRAY $vinoteca, $vinos

$vinos = cantYprecioprom($vinoteca);
print_r ($vinos);



