<?php

//Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
//Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
//Stampiamo a schermo tutte le partite con questo schema:
//Olimpia Milano - Cantù | 55-60


 

$matches = [
    [
        'home_team' => 'Olimpia Milano',
        'enemy_team' => 'Cantù',
        'home_team_points' => '55',
        'enemy_team_points' => '60',
    ],
    [
        'home_team' => 'Virtus Bologna',
        'enemy_team' => 'Fortitudo Bologna',
        'home_team_points' => '70',
        'enemy_team_points' => '65',
    ],
    [
        'home_team' => 'Real Madrid',
        'enemy_team' => 'FC Barcelona',
        'home_team_points' => '80',
        'enemy_team_points' => '75',
    ],
    // Aggiungi altri match qui
];

var_dump($matches);

foreach ($matches as $match) {
    echo $match['home_team'] . ' - ' . $match['enemy_team'] . ' | ' . $match['home_team_points'] . ' - ' . $match['enemy_team_points']. '<br>';
}

?>