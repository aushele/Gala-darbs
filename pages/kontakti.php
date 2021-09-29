<?php
$name = $email = $zina =""; //Tukši mainīgie formas datiem

//Funkcija ievades apstrādei
function test_input($data) {
    $data = trim($data); //Noņem liekās atstarpes
    $data = stripslashes($data); //Noņem liekās slīpsvītras
    $data = htmlspecialchars($data); //Pārkodē speciālās rakstzīmes
    return $data; //Atgriež apstrādātu ievadi
   
}

//Pārbaude, vai ir nospiesta submit poga un saņemt GET/POST pieprasījums
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //Ko darām, ja pieprasījums saņemts
    //Pārbaudām vai lauks ir aizpildīts
    if (empty($_POST['name'])) { //Ja lauks tukšs, tad...
        echo "<p>Vārda lauks ir tukšs!</p>";
    } else {
        $name = test_input($_POST['name']); //Saglabā vērtību mainīgajā
    }

    if (empty($_POST['zina'])) { //Ja lauks tukšs, tad...
        echo "<p>Komentāra lauks ir tukšs!</p>";
    } else {
        $comment = test_input($_POST['zina']); //Saglabā vērtību mainīgajā
    }

    if (empty($_POST['email'])) { //Ja lauks tukšs, tad...
        echo "<p>Epasta lauks ir tukšs!</p>";
    } else {
        $email = test_input($_POST['email']); //Saglabā vērtību mainīgajā
    }

} else {
    echo "<p>Nav aizpildīta forma!</p>";
}
$file="zinas.xlsx"; ///no youtube

//Ierakstīt excel failā
$file_r = fopen("Paldies! Ziņa ir nosūtīta!") or die ("Nevar nosūtīt ziņu!");
$txt = "Jauna ziņa \n";
fwrite($fils_r, $txt);
fclose(file_r);


?>