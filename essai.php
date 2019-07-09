<?php
    $i = 1;
    for($i = 1; $i<=50; $i++){
        if($i%3 == 0){
            echo '<div style="color : red;">ping</div></br>';
        }
        elseif($i%5 == 0){
            echo '<div style="color : green">pong</div></br>';
        }
        elseif($i%3 == 0 && $i%5 == 0){
            echo '<div style="color : blue;">pingpong</div></br>';
        }
        else{
            echo $i . '</br>';
        }
    }
?>