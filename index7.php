<?php


// Regola 1: Almeno 8 caratteri
function checkLength($psw) {
    if (strlen($psw) >= 8) {
        return true;
    }
    echo "Errore: La password deve avere almeno 8 caratteri.\n";
    return false;
}

// Regola 2: Almeno un numero
function checkNumber($psw) {
    for ($i = 0; $i < strlen($psw); $i++) { 
        if (is_numeric($psw[$i])) {         
            return true;
        }
    }
    echo "Errore: La password deve contenere almeno un numero.\n";
    return false;
}

// Regola 3: Almeno una lettera maiuscola
function checkUpper($psw) {
    for ($i = 0; $i < strlen($psw); $i++) {
        if (ctype_upper($psw[$i])) { 
            return true;
        }
    }
    echo "Errore: La password deve contenere almeno una lettera maiuscola.\n";
    return false;
}

// 2. FUNZIONE PRINCIPALE DI VALIDAZIONE
function validatePassword($psw) {
    
    $isValid = true;

    
    if (!checkLength($psw)) {
        $isValid = false;
    }
    if (!checkNumber($psw)) {
        $isValid = false;
    }
    if (!checkUpper($psw)) {
        $isValid = false;
    }

    return $isValid;
}

// 3. CICLO DI REINSERIMENTO (IL CUORE DEL COMPITO)
do {

    $password = readline("Inserisci la psw: ");
    

    $isPasswordOk = validatePassword($password);
    
    if (!$isPasswordOk) {
        echo "Riprova!\n\n";
    }

} while (!$isPasswordOk);

echo "Password accettata e salvata con successo!\n";
