<?php 
//FOR
//utilizado como contador, com inicio e fim, e possui taxa incremental ou decremental 

for($i = 0; $i < 10000; $i+=2){  //+= significa, ele mesmo mais cinco
    if($i > 200 && $i <800) continue;
    if($i == 900) break;
    echo $i . " ";
}


?>