<?php
    require __DIR__ . '/Player.php';
    
    class RankingTable{
        private $entryOrder; //początkowa liczba graczy
        private $players;
        private $leaderboard;

        function __construct($names){
            $this->players = [];
            foreach($names as $name){
                $this->players[] = new Player($name);
            }
            $this->entryOrder = $this->players;
        }

        public function recordResult($name, $score){
            $foundPlayer = $this->findPlayer($name);
        
            if($foundPlayer !== null){
                $foundPlayer->addGame($score);
                $this->updateLeaderboard();
            }else
            {
                echo "Player not found";
            }
        }

        public function playerRank($rank){
            return $this->leaderboard[$rank-1] ?? null; //zwraca gracza po rankingu, w przypadku braku podanego miejsca zwraca null   
        }

        private function findPlayer($name){
            foreach ($this->players as $player) {
                if ($player->getName() === $name) {
                    return $player;
                }
            }
            return null;
        }

        private function updateLeaderboard(){
            usort($this->players, function ($a, $b) {
                if ($a->getMaxScore() !== $b->getMaxScore()) {
                    // sortuj po najwyższym wyniku
                    return $b->getMaxScore() - $a->getMaxScore();
                } elseif ($a->gamesCount() !== $b->gamesCount()){
                    // sortuj po liczbie gier
                    return $a->gamesCount() - $b->gamesCount();
                } else {
                    // sortuj po kolejności wpisania na listę
                    return $this->getPlayerIndex($a) - $this->getPlayerIndex($b);
                }
            });
        
            // aktualizuje ranking
            $this->leaderboard = array_map(function ($player) {
                return $player->getName();
            }, $this->players);
        }

        //pobiera index gracza z początkowej listy
        private function getPlayerIndex($player) {
            foreach ($this->entryOrder as $index => $p) {
                if ($p === $player) {
                    return $index;
                }
            }
            return -1;
        }
    }