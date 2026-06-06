<?php

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Marco', 'surname' => 'Rossi', 'gender' => 'M'],
    ['name' => 'Laura', 'surname' => 'Bianchi', 'gender' => 'F'],
    ['name' => 'Alex', 'surname' => 'Verdi', 'gender' => 'Non Specificato'],
];

foreach ($users as $user) {
    

    if ($user['gender'] == 'M') {
        echo "Buongiorno Sig. " . $user['name'] . " " . $user['surname'] . "\n";
    } 
    elseif ($user['gender'] == 'F') {
        echo "Buongiorno Sig.ra " . $user['name'] . " " . $user['surname'] . "\n";
    } 
    else {
      
        echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
    }
    
}

?>