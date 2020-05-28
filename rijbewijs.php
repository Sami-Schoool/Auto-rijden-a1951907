<?php

    
    $leeftijd = readline("wat is je leeftijd? \n");
    $min_leeftijd = 16.75;

        if ($leeftijd >= $min_leeftijd) 
        { 
            echo "Je mag beginnen met rijlessen!";
        } 

    else { 
        echo "Helaas, je mag nog niet beginnen met rijlessen";
    }
?>