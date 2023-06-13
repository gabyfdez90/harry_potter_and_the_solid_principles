<?php
//Ejercicio 1: Declarar variables por cada tipo de datos.

$personaje = "Hermione Granger";
echo $personaje;

echo "\n";

const PROTAGONISTA = "Harry Potter";
echo PROTAGONISTA;

$cantidad_de_hijos = 2;
echo "\n";

$personajes = [
    "Hermione Granger" => 2,
    "Harry Potter" => 3,
    "Draco Malfoy" => 1
];

$film1_puntuacion = 6.8;
$film2_puntuacion = 6.5;
$film3_puntuacion = 6.9;

echo "\n";
var_dump($film1_puntuacion);

$es_mago = true;
echo $es_mago . "<br />";
var_dump($es_mago);

// Ejercicio 2: Mostrar en consola y en pantalla, también un null

// $var = "esto será un null";
// unset($var);
// var_dump($var);
// Silenciado porque da un warning en consola y me pone nerviosa.

// Ejercicio 3: Identificar tipo de dato
$nombre = "Luna"; //str
echo "\n";
$apellido = "Lovegood"; //str
echo "\n";
$edad = 42; //int
echo "\n";
$Ravenclaw = true; //boolean
echo "\n";

$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
echo $promedio; //float
echo "\n";

$nombre_completo = $nombre . " " . $apellido;
var_dump($nombre_completo); //str
echo "\n";

$presento_examen = (bool)1;
var_dump($presento_examen); //boolean
echo "\n";

$numero_preguntas = 5 + "5";
var_dump($numero_preguntas); //int
echo "\n";

$numero_respuestas = "5" + 5;
var_dump($numero_respuestas); //int
echo "\n";

$promedio_maximo = $numero_respuestas / 1.0;
var_dump($promedio_maximo) . "<br />";
echo "\n";

// $nargles = 3 + "5 nargles"; //
// var_dump($nargles); Esto también da warning, aunque luego el resultado int(8)
echo "\n";

// Ejercicio $: Tablas de verdad
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

var_dump($es_un_michi_grande && $le_gusta_comer); //true
echo "\n";
var_dump($es_un_michi_grande || $sabe_volar); //true
echo "\n";
var_dump($sabe_volar || $tiene_2_patas); //false
echo "\n";
var_dump(!$le_gusta_comer); //false
echo "\n";
var_dump(!$le_gusta_comer || $es_un_michi_grande); //true
echo "\n";


//Ejercicio 5: Convertir str a mayus
$nombre_mayus = strtoupper($nombre_completo);
echo $nombre_mayus . "<br />";
echo "\n";

//Ejercicio 6: Imprimir longitud str
$name_len = strlen($nombre_completo);
echo 'La longitud de la variable str es: ' . $name_len . "<br />";
echo "\n";

// Ejercicio 7: Imprimir cantidad de palabras en str
//$space_position = strpos($nombre_completo, ' ');

/* function wordCount($str)
{
    $word_count = 1;
    for ($x = 0; $x <= strlen($str); $x++) {
        if ($x === ' ') {
            $word_count += 1;
        }
        return $word_count;
    }
}
echo wordCount($nombre); */

$word_count = str_word_count($nombre_completo);
echo $word_count . "<br />";
echo "\n";


// Ejercicio 8: Cambia a orden inverso caracteres del str

$reverse_word = strrev($nombre);
echo $reverse_word . "<br />";
echo "\n";

//Ejercicio 9: Cambiar a michi
$cat_story = "Un gato hambriento ronda la cocina.";
$new_cat_story = str_replace("gato", "michi", $cat_story);
echo $new_cat_story . "<br />";

// Ejercicio 10: Declara dos variables con un valor de tipo int e imprime en pantalla
//Nota . "<br />" sirve para añadir un salto de linea en pantalla, pero no funciona siempre bien en consola. "\n" es al revés.
$age = 32;
echo $age . "<br />";
$birth_year = 1990;
echo $birth_year . "<br />";

// Ejercicio 11: suma ambas variables de tipo int e imprime pantalla y consola

$current_year = $age + $birth_year;
echo "\n";
echo $current_year . "<br />";

// Ejercicio 12: Declara dos variables, dale valor de 1 y 0 tipo int e imprime el tipo de dato en pantalla y consola
$true_in_binary = 1;
$false_in_binary = 0;

var_dump($true_in_binary);
echo "\n";
var_dump($false_in_binary);
echo "<br />";

// Ejercicio 13: Cambiar tipo de dato a bool

$true_bool = (bool) $true_in_binary;
var_dump($true_bool);

$false_bool = (bool) $false_in_binary;
var_dump($false_bool);
echo "<br />";

// Ejercicio 14: Crear función que reciba como parámetros 2 #s y devuelva su suma

function addition($num1, $num2)
{
    return $num1 + $num2;
}

echo addition(5.4, 8.9);
echo "<br />";

// Ejercicio 15: Crear función que determine si un número es par o impar

function odd_or_even($num)
{
    if ($num % 2 == 0) {
        return "The number " . $num . " is even.";
    }
    return "The number " . $num . " is odd.";
}

echo odd_or_even(5);
echo "<br />";
echo odd_or_even(18);
echo "<br />";

//Ejercicio 16: Crear un array de 10 numeros

$años_nacimiento = [
    1990, 1992, 1995, 2000, 2001, 2004, 2006, 2008, 2013, 2015, 2017
];

// Ejercicio 17: Obtener el largo del array

$len_array = count($años_nacimiento);
echo $len_array;

//Ejercicio 18: Agrega valor tipo str 

// array_push($años_nacimiento, 2020);
// echo $años_nacimiento;