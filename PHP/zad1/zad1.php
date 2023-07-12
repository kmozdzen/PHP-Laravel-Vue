<?php
    require __DIR__ . '/Pipeline.php';
    
    $pipeline = new Pipeline();
    $result = $pipeline->make(
        function($var) { 
            return $var * 3; 
        }, 
        function($var) { 
            return $var + 1; 
        },
        function($var) { 
            return $var / 2; 
        }
    );

    echo $result(10);