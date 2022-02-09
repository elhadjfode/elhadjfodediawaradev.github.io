<?php
session_start();
if(!isset( $_SESSION['unique_id'])){
    header("Location:login.php");
}
?>
<?php require_once "headers.php"; ?>
    <div class="wrapper">
        <section class="users">
            <header>
                <?php
                include_once("php/config.php");
                    $sql = mysqli_query($connect,"SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    //var_dump($sql);
                    if(mysqli_num_rows($sql) > 0) {
                        $rows = mysqli_fetch_assoc($sql);
                     
                    }
                ?>
                <div class="content">
                    <img src="php/images/<?php echo $rows['img']; ?>" alt="">
                    <div class="details">
                        <span><?php echo $rows['fname'] . " " . $rows['lname']; ?></span>
                        <p><?php echo $rows['status']; ?></p>

                    </div>
                </div>
                <a href="php/logout.php?logout_id=<?php echo $rows['unique_id']; ?>" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text"> Select a category name</span>
                <input type="text" placeholder="Enter  name">
                <button><i class="fa fa-search"></i></button>
            </div>
            <div class="users-list">
              
            </div>
        </section>
    </div>
    <script src="js/users.js"></script>
</body>
</html>