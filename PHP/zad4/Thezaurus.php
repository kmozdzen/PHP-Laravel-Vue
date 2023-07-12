<?php
    class Thezaurus{
        private $thezaurus;

        public function __construct(){
            $this->thezaurus = array(
                "market" => array("trade"),
                "small" => array("little", "compact")
            );
        }

        public function getSynonyms($word){
            $synonyms = [];
            
            if(array_key_exists($word, $this->thezaurus)){
                $synonyms = $this->thezaurus[$word];
            }

            return json_encode([
                "word" => $word,
                "synonyms" => $synonyms
            ]);
        }
    }