<?php
 while($rows = mysqli_fetch_assoc($sql)){
     // requete pour les messages disponible ou bien aucun message disponible $sql2 et $row2
     $sql2 = " SELECT * FROM messages WHERE (incoming_msg_id ={$rows['unique_id']} 
                OR outgoing_msg_id ={$rows['unique_id']}) AND (outgoing_msg_id ={$outgoing_id} 
                OR outgoing_msg_id ={$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
    $query2 = mysqli_query($connect, $sql2);
    $row2 = mysqli_fetch_assoc($query2);
    if(mysqli_num_rows($query2) > 0){
        $result = $row2['msg'];
    }else{
        $result ="aucun message disponible";
    }

        //message de rognage si le mot est supérieur à 28
    (strlen($result) > 28) ? $msg = strtr($result, 0,28).'...' : $msg = $result;

    //ajoutant vous : texte avant msg si identifiant de connexion envoyer msg
    ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "vous:" : $you ="";

    //vérifier que l'utilisateur est en ligne ou hors ligne
    ($rows['status'] == "hors ligne maintenant") ? $offline = "offline" : $offline = "";
    $output .= '<a href="chat.php?user_id='.$rows['unique_id'].'">
    <div class="content">
        <img src="php/images/'. $rows['img'] .'" alt="">
        <div class="details">
        <span>'.$rows['fname'] . " " . $rows['lname'] .'</span>
        <p>'. $you. $msg .'</p>
    </div>
    </div>
    <div class="status-dot'.$offline.'"><i class="fa fa-circle"></i></div>
</a>';
}