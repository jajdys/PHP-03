<?php
$matrix = array(
    array(1, 2, 3), 
    array(4, 5, 6), 
    array(7, 8, 9)
);

$matrix_transpozycja = array();

$rows = count($matrix);
$cols = count($matrix[0]);

for($i = 0; $i < $rows; $i++){
    for($j = 0; $j < $cols; $j++){
        $matrix_transpozycja[$j][$i] = $matrix[$i][$j];
    }
}

echo "Macierz przed transpozycją: <br>";
for($i = 0; $i < $rows; $i++){
    for($j = 0; $j < $cols; $j++){
        echo $matrix[$i][$j]. " ";
    }
    echo"<br>";
}

echo "<br><br>";
echo "Macierz po transpozycji: <br>";
for($i = 0; $i < $rows; $i++){
    for($j = 0; $j < $cols; $j++){
        echo $matrix_transpozycja[$i][$j]. " ";
    }
    echo"<br>";
}

?>