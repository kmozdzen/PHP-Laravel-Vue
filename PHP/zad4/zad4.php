<?php
    require __DIR__ . '/Thezaurus.php';

    $thesaurus = new Thezaurus();

    echo $thesaurus->getSynonyms("small") . "\n";
    echo $thesaurus->getSynonyms("asleast") ;
    