<?php 
class Func{
    public function Determinant($A, $N) {
        $det = 1;
        for ($i = 0; $i < $N; $i++) {
            for ($j = $i + 1; $j < $N; $j++) {
                $factor = $A[$j][$i] / $A[$i][$i];
                for ($k = $i; $k < $N; $k++) {
                    $A[$j][$k] -= $factor * $A[$i][$k];
                }
            }
        }
        for ($i = 0; $i < $N; $i++) {
            $det *= $A[$i][$i];
        }
        return $det;
    }
}
if (isset($_POST['function']) && $_POST['function'] == 'generatePattern') {
    extract($_REQUEST);
    $n = $inp;
    for ($i = 1; $i <= 2 * $n - 1; $i++) {
        for ($j = 1; $j <= 2 * $n - 1; $j++) {
            $maxDist = max(abs($n - $i), abs($n - $j));
            // echo $maxDist;
            $num = $n - $maxDist ;
            echo $num;
        }
        echo "<br>";
    }
}
?>