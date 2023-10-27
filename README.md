PHP Strong Password Generator
===

## Milestone 1
1. Dichiaro una variabile come una stringa con tutti i caratteri possibili, con cui generero la password
1. Dichiaro la variabile che sarà la lunghezza scelta per la password [che avrà delle condizioni di controllo (>= 8 && <= 32)]
1. Dichiaro una funzione di controllo sull'input della lunghezza 
1. Dichiaro un messaggio di errore stringa vuota
1. Dichiaro funzione che genererà la password della lunghezza scelta, per ora senza controlli
1. Costruisco il form, in cui chiedo la lunghezza della password, nell'index
1. All'invio del form:
    - se NON corretto:  Ritorna sulla stessa pagina e visualizzo il messaggio di errore
    - se È corretto:    Ritorna sulla stessa pagina e visualizzo la password generata

## Milestone 2
1. Sposto le variabili nel file vars.php
1. Includo il file vars.php in index.php
1. Sposto le funzioni nel file functions.php
1. Includo il file functions.php in index.php

## Milestone 3 (BONUS)
1. All'invio del form:
    - se NON corretto:  Ritorna sulla stessa pagina e visualizzo il messaggio di errore
    - se È corretto:    Starto la sessione e nella stessa dichiaro una variabile per la password generata e atterro nella nuova pagina
1. Nella nuova pagina di atterraggio visualizzerò la password...
1. ... e un bottone per tornare alla pagina di generazione password

## Extra-bonus
1. Suddivido la variabile/stringa generica dei caratteri in variabili più specifiche (string or array?)
1. Creo una logica che andrà a pescare almeno una volta da ogni variabile
OPPURE -
1. Creo ulteriori variabili specifiche per i caratteri (per il controllo)
1. Se la stringa generata contiene almeno un carattere contenuto in ogni variabile di controllo, procedo col punto 6 della Milestone 1
1. Se la stringa generata NON contiene almeno un carattere contenuto in ogni variabile di controllo, ripeti la generazione della password