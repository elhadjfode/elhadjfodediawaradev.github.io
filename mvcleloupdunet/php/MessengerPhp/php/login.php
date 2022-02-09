<?php
include_once ("config.php");
$email = mysqli_real_escape_string($connect, $_POST['email']);
$password = mysqli_real_escape_string($connect, $_POST['password']);
//echo"Hello from login.php fille";
if(!empty($email) && !empty($password)){
    // vérifions que les utilisateurs ont entré l'e-mail et le mot de passe correspondant à la base de données
    $sql = mysqli_query($connect, "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'");
    if(mysqli_num_rows($sql) > 0){//si les informations d'identification des utilisateurs correspondent
        $row = mysqli_fetch_assoc($sql);
        $status ="Active now";
        //mise à jour du statut de l'utilisateur à actif maintenant si l'utilisateur se connecte avec succès
        $sql2 = mysqli_query($connect, "UPDATE users SET status ='{ $status}' WHERE unique_id ={$row['unique_id']}");
       if($sql2) {
        $_SESSION['unique_id'] = $row['unique_id'];//utilise unique cette session nous avons utilisé l'utilisateur unique_id autre php
        //var_dump($_SESSION);
      echo"success";
       }

    }else{
        echo "l'email ou le mot de passe est incorrect";
    }
}else{
    echo "Tous les champs de saisie sont obligatoires !!!";
}