<?php declare(strict_types=1);

/**
 * Retornar identificadores numéricos ordenados de mayor a menor.
 * 
 * @param string $text
 * 
 * @return array
 */
function fnA($text)
{
    preg_match_all('!\d+!', $text, $ids);
    rsort($ids[0], SORT_NUMERIC);
    return $ids[0];
}

$text = "Hola @[Franklin](user-gpe-1071) avisa a @[Ludmina](user-gpe-1061)";
$result = fnA($text); // $result será [1071, 1061]


 /**
 * Retornar texto reemplazando el patrón @[NameUser](user-gpe-identificador) por @NameUser
 * 
 * @param string $text
 * 
 * @return string
 */
function fnB($text)
{
    preg_match_all('/\[([^)]+)\]/', $text, $names);
    foreach( $names[1] as $name) {
        $text = preg_replace('/\['.$name.'\]+\([\w \-]*\)/', $name, $text);
    }
    return $text;
}

$text = "Hola @[Franklin](user-gpe-1071) avisa a @[Ludmina](user-gpe-1061)";
$result = fnB($text); // $result es “Hola @Franklin avisa a @Ludmina”