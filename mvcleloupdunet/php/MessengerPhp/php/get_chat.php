<?php
session_start();
if(isset($_SESSION['unique_id'])){
    include_once ("config.php");
    $outgoing_id = mysqli_real_escape_string($connect, $_POST['outgoing_id']);
    $incoming_id = mysqli_real_escape_string($connect, $_POST['incoming_id']);
    $output = "";


    $sql = "SELECT * FROM messages 
    LEFT JOIN users ON users.unique_id = messages.incoming_msg_id
    WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
            OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";

    $query = mysqli_query($connect, $sql);
    //var_dump($query);
    //die();
    if(mysqli_num_rows($query) > 0){
        while($rows = mysqli_fetch_assoc($query)){
            
            if($rows['outgoing_msg_id'] ===  $outgoing_id){//si c'est égal à alors il est un expéditeur de msg
                $output .= ' <div  class="chat outgoing">
                <div class="details">
                   <p>'.$rows['msg'] .'</p>
               </div>
           </div>';

            }else{//il est un récepteur de messages
                $output .=' <div class="chat incoming">
                <img src="php/images/'.$rows['img'] .'" alt="">
                 <div class="details">
                    <p>'.$rows['msg'] .'</p>
                </div>
            </div>';
                
            }

        }
        echo $output;
    }

}else{
    header("../login.php");
}