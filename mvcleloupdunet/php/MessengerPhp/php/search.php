<?php
session_start();
//echo"Hello";
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];
$rUnepersonne = mysqli_real_escape_string($connect, $_POST['rUnepersonne']);
//echo $rUnepersonne;
//die();

$output="";
//echo $rUnepersonne;
$sql = mysqli_query($connect, "SELECT * FROM users WHERE NOT unique_id= {$outgoing_id} AND (fname LIKE '%{$rUnepersonne}%' OR lname LIKE '%{$rUnepersonne}%')");
if(mysqli_num_rows($sql) >0){
    //echo"l'utilisateur est trouvé";
    include "data.php";

}else{
    $output .= "Aucun utilisateur trouvé en rapport avec votre terme de recherche";
}
echo $output;