<?php
// Ruta al archivo JSON
$jsonFilePath = 'users.json';

// Lee el contenido del archivo JSON
$jsonData = file_get_contents($jsonFilePath);

// Decodifica el JSON en un array asociativo
$dataArray = json_decode($jsonData, true);

// Verifica si hubo un error en la decodificación
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error al decodificar el archivo JSON: ' . json_last_error_msg());
}

// Ahora puedes recorrer y trabajar con el array de datos
foreach ($dataArray as $item) {
    if ($item['usuario'] == 'pedro@gmail.com' && $item['password'] == 'Hola123') {
        // Accede a los valores de las claves del array como desees
        echo 'Nombres: ' . $item['nombres'] . '<br>';
        echo 'Apellidos: ' . $item['apellidos'] . '<br>';
    }
}





// $edades = [18, 25, 35, 45, 60];
// $nombres = ["Deisy", "Carol", "Valentina", "Crony", "Juan", "Miguel"];


// $usuarios = [
//     [
//         "nombre" => "Pedro Jose",
//         "apellido" => "Castilla Hernandez",
//         "edad" => 25,
//         "estatura" => 1.65,
//         "direcciones" => [
//             "direccion1" => "Medellin",
//             "direccion_2" => "Itagui",
//             "direccion_3" => "Envigado"
//         ]
//     ],
//     [
//         "nombre" => "Deisy Patricia",
//         "apellido" => "Castilla Hernandez",
//         "edad" => 25,
//         "estatura" => 1.65,
//         "direcciones" => [
//             "direccion1" => "Medellin",
//             "direccion_2" => "Itagui",
//             "direccion_3" => "Envigado"
//         ]
//     ]
// ];


// // echo var_dump($usuarios);
// // return print($usuarios);

// foreach ($usuarios as $value) {
//     echo "Aprendiz : " . $value['nombre'] . "<br>";
// }

// // Ciclos 

// // for();
// // for ($i = 0; $i < count($nombres); $i++) {
// //     echo "Aprendiz : " . $nombres[$i] . "<br>";
// // }

//     // $i=0;
//     // while($i<count($nombres)){
//     //     echo "hola";
//     // }

//     // do{
        
    // }while($i<10);



    // if($i<20){
    //     echo "hola";
    // }