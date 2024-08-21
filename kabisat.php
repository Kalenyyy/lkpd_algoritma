<?php 
    for ($i=1600; $i <= 2024; $i++) { 

        if ($i == 1700 || $i == 1800) {
            echo $i . ' Bukan Kabisat' . '<br>';

        }elseif ($i % 400 == 0 && ($i != 1700 || $i != 1800)) {
            echo $i . ' Kabisat'. '<br>';
        } elseif ($i % 100 == 0 && ($i != 1700 || $i != 1800)) {
            echo $i . ' Kabisat'. '<br>';
        } elseif ($i % 4 == 0 && ($i != 1700 || $i != 1800)) {
            echo $i . ' Kabisat'. '<br>';
        }

        
    }

?>