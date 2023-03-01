<?php 

$matrix = array(
    array(1, 2, 3), 
    array(4, 5, 6), 
    array(7, 8, 9)
);

$matrix2 = array(
    array(1, 4, 7), 
    array(2, 5, 8), 
    array(3, 6, 9)
);

echo "Macierz 1: <br>";
for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        echo $matrix[$i][$j]. " ";
    }
    echo"<br>";
}

echo "<br>";
echo "Macierz 2: <br>";
for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        echo $matrix2[$i][$j]. " ";
    }
    echo"<br>";
}

$transpozycja = true;

for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        if($matrix2[$i][$j] != $matrix[$i][$j]){
            $transpozycja = false;
            break 2;
        }
    }
    echo "<br>";
}

echo "<br>";
if($transpozycja){
    echo "Macierz 2 jest transpozycyjna";
}
else{
    echo "Macierz 2 nie jest transpozycyjna";
}

?>