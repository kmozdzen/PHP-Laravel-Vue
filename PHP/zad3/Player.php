<?php
    class Player{
        private $name;
        private $games = [];

        function __construct($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function addGame($score){
            $this->games[] = $score;
        }

        public function getMaxScore(){
            if (empty($this->games)) {
                return 0; // zwraca 0, gdy nie ma gier
            }
            return max($this->games); // zwraca najlepszy wynik z gier
        }

        public function gamesCount(){
            return count($this->games); //zwraca liczbę gier
        }
    }