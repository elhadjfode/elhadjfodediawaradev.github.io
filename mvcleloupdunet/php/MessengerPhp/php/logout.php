<?php
session_start();
if(isset($_SESSION['unique_id'])){//si l'utilisateur est connecté alors venez sur cette page sinon allez sur la page de connexion
include_once "config.php";
$logout_id= mysqli_real_escape_string($connect, $_GET['logout_id']);
if(isset($logout_id)){//si l'identifiant de déconnexion est défini
    $status = "Offline now";
    //à la déconnexion de l'utilisateur, nous mettrons à jour ce statut hors ligne et dans le formulaire de connexion
    //nous mettrons à jour le statut à actif maintenant si l'utilisateur s'est connecté avec succès
    $sql = mysqli_query($connect, "UPDATE users SET status ='{ $status}' WHERE unique_id ={$logout_id}");
    if($sql){
        session_unset();
        session_destroy();
        header("Location:../login.php ");
    }
}else{
    header("Location:../users.php ");
}

}else{
    header("Location:../login.php ");
}