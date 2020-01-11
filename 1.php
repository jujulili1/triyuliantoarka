<?php


function productJson()
{
$product = array(
    'Name' => "Tri Yulianto",
    'Age' => 24,
    'Adrress' => "Kebondalem RT 02 RW 06 Paseban, Bayat, Klaten",
    'Hobby' => array("Membaca","Badminton"),
    'Is_Married' => false,
    'List_School' => array(
        0 => array(""),
        1 => array("SMKN 2 Klaten","2010","2014","Teknik Gambar Bangunan"),
    ),
    'skill' => array(
        0 => array("AutoCCAD","Advanced"),
        1 => array("GoogleSketchup","Advanced"),
        2 => array("PHP","Beginner"),
    ),
    'Interest_in_coding' => true,
);

return json_encode($product);

}

$jsonProduct = productJson( );

echo $jsonProduct;


?>