<?php
    $id =  "";
    $nextId = "";
    $imie =  "";
    $nazwisko =  "";
    $zawod =  "";
    $pensja = "";

    $plik = @fopen("plik.txt", "r") or die ("Błąd pliku!");

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        fgets($plik);
        while(true){
            $wiersz = fgets($plik);
            if(explode(" ", $wiersz)[0]==$id){
                break;
            }
        }
        $rekord = explode(" ", $wiersz);
        $imie = $rekord[1];
        $nazwisko = $rekord[2];
        $zawod = $rekord[3];
        $pensja = $rekord[4];
    } else {
        $id = trim(explode(" ", fgets($plik) )[1]);
        $nextId = intval($id)+1;
    }

    fclose($plik);

include 'formularzWidok.php';
