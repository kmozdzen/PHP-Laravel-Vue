<?php
    require __DIR__ .'/TextInput.php';
    require __DIR__ .'/NumericInput.php';

    $textInput = new TextInput();
    $numericInput = new NumericInput();

    $textInput->add("Messi ");
    echo $textInput->getValue() . "\n";
    $textInput->add(10);
    echo $textInput->getValue() . "\n";

    $numericInput->add("Ronaldo ");
    echo $numericInput->getValue() . "\n";
    $numericInput->add(7);
    echo $numericInput->getValue() . "\n";


