<?php
    require __DIR__ . '/RankingTable.php';

    $table = new RankingTable(array('Jan', 'Maks', 'Monika'));
    $table->recordResult('Jan', 2);
    $table->recordResult('Maks', 3);
    $table->recordResult('Monika', 5);
    echo $table->playerRank(1);