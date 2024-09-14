<?php
function forLoop($number){
    for ($i = 1; $i <= 100; $i += $number) {
        if ($i % 2 == 0){
            echo 'Number: ' .$i .' This is even<br>';} 
        else {
            echo 'Number: ' .$i .' This is odd<br>';}
    }
}
echo forLoop(5);
?>