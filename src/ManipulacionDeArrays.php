<?php declare(strict_types=1);

/**
 * Retornar array ordenado segun los criterios pasados.
 * 
 * @param array $array
 * @param array $sortCriterion
 * 
 * @return array
 */
function orderElement(array $array, array $sortCriterion)
{
    $sortByAge = ($sortCriterion['age'] === 'DESC') ? SORT_DESC : SORT_ASC;
    $sortByScoring = ($sortCriterion['scoring'] === 'DESC') ? SORT_DESC : SORT_ASC;

    foreach ($array as $key => $row) {
        $order1[$key] = $row['age'];
        $order2[$key] = $row['scoring'];
    }

    array_multisort($order1, $sortByAge, $order2, $sortByScoring, $array);

    return $array;
}

$array = [ 
    ['user' => 'Oscar', 'age' => 18, 'scoring' => 40], 
    ['user' => 'Mario', 'age' => 45, 'scoring' => 10], 
    ['user' => 'Zulueta', 'age' => 33, 'scoring' => -78],  
    ['user' => 'Mario', 'age' => 45, 'scoring' => 78], 
    ['user' => 'Patricio', 'age' => 22, 'scoring' => 9], 
]; 
$sortCriterion = ['age' => 'DESC', 'scoring' => 'DESC']; 
$result = orderElement($array, $sortCriterion);