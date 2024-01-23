<?php

function validData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strtolower($data);

    return $data;
}

if(isset($_FILES['file'])){

$tmpName = $_FILES['file']['tmp_name'];
$name = $_FILES['file']['name'];
$size = $_FILES['file']['size'];
$error = $_FILES['file']['error'];

$tabExtension = explode('.', $name);
$extension = strtolower(end($tabExtension));
//Tableau des extensions que l'on accepte
$extensions = ['jpg', 'png', 'jpeg', 'gif'];
$maxSize = 4000000;
if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0){
    $uniqueName = uniqid('', true);
    $file = $uniqueName.".".$extension;
    move_uploaded_file($tmpName, './Content/img/upload/'.$name);
}
else{
    echo "Mauvaise extension ou taille trop grande";
}
}

