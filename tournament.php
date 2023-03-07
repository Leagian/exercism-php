<?php
class Tournament {
    private $teams = array();
    private $table = array();
    private $headings = array('MP', 'W', 'D', 'L', 'P');
    
    function __construct($teamNames) {
        foreach ($teamNames as $name) {
            $this->teams[$name] = array('MP' => 0, 'W' => 0, 'D' => 0, 'L' => 0, 'P' => 0);
        }
    }
    
    function processMatch($match) {
        list($team1, $team2, $result) = explode(';', $match);
        
        $this->teams[$team1]['MP'] += 1;
        $this->teams[$team2]['MP'] += 1;
        
        if ($result == 'win') {
            $this->teams[$team1]['W'] += 1;
            $this->teams[$team1]['P'] += 3;
            $this->teams[$team2]['L'] += 1;
        } else if ($result == 'draw') {
            $this->teams[$team1]['D'] += 1;
            $this->teams[$team1]['P'] += 1;
            $this->teams[$team2]['D'] += 1;
            $this->teams[$team2]['P'] += 1;
        } else {
            $this->teams[$team1]['L'] += 1;
            $this->teams[$team2]['W'] += 1;
            $this->teams[$team2]['P'] += 3;
        }
    }
}

