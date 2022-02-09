<?php
session_start();
if(!isset( $_SESSION['unique_id'])){
    header("Location:login.php");
}
?>
<?php require_once "headers.php";?>
    <div class="wrapper">
        <section class="chat-area">
            <header>
            <?php
                include_once("php/config.php");
                $user_id= mysqli_real_escape_string($connect, $_GET['user_id']);
                //var_dump($user_id);
                //die();
                    $sql = mysqli_query($connect,"SELECT * FROM users WHERE unique_id = {$user_id}");
                    // var_dump($sql);
                    // die();
                    if(mysqli_num_rows($sql) > 0) {
                        $rows = mysqli_fetch_assoc($sql);
                        //var_dump($rows);
                        //die();
                     
                    }
                ?>
                    <a href="users.php" class="black-icon"><i class="fa fa-arrow-left"></i></a>
                    <img src="php/images/<?php echo $rows['img']; ?>">
                    <div class="details">
                        <span><?php echo $rows['fname'] . " " . $rows['lname']; ?></span>
                        <p><?php echo $rows['status']; ?></p>
                    </div>
            </header>
            <div class="chat-box chatt">
              
            </div>
            <form action="#" class="typing-area" autocomplete="off">
                <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
                <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="message...">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
    <script src="js/chat.js"></script>
</body>
</html>