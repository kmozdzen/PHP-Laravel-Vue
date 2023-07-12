<?php
    class TextInput{
        protected $value;
        
        function __construct(){
            $this->value = '';
        }

        public function add($text){
            $this->value = $this->value . $text;
        }
        public function getValue(){
            return $this->value;
        }
    }