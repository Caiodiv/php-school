<?php
for($n=0; $n < 100; $n++){
    if ($n % 2 == 0){
        continue;
    }
        echo $n . "</br>";
        if ($n >= 50) break;
    
}
?>