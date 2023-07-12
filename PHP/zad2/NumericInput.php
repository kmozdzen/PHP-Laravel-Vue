<?php
    require_once __DIR__ .'/TextInput.php';
    class NumericInput extends TextInput{
        public function add($text){
            if(!is_numeric($text))
                parent::add($text);
        }
    }