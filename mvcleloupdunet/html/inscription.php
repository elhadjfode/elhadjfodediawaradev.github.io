<?php 
require_once "../header/header.php";

?>
<div class="container">

<div class="wrapper">
        <section class="form signup">
            <header> Connexion Chat messenger </header>
            <form action="#" enctype="multipart/form-data" method="post">
              
                <div class="field button">
                        <!-- <input type="submit" placeholder="Inscription"> -->
                        <a class="input" href="index.php">Connexion</a>
                </div> 
            </form>
        </section>
</div>

<div class="wrapper">
        <section class="form signup">
            <header> Inscription  Chat messenger </header>
            <form action="#" enctype="multipart/form-data" method="post">
                <div class="error-txt"> </div>
                <div class="name-details">
                    <div class="field input">
                        <label> First Name</label>
                        <input type="text" placeholder="First Name" name="fname" required>
                    </div>
                    <div class="field input">
                        <label> Last Name</label>
                        <input type="text" placeholder="Last Name" name="lname" required>
                    </div>
                </div>
                 <div class="field input">
                        <label> Email</label>
                        <input type="text" placeholder="Entrer votre Email" name="email" required>
                    </div>
                    <div class="field input">
                        <label> Password</label>
                        <input type="password" placeholder="Entrer votre Password" name="password" required>
                        <i class="fa fa-eye"></i>
                    </div>
                <div class="field button">
                        <input type="submit" placeholder="Inscription">
                </div> 
            </form>
            <div class="link">Andrey And up?<a href="index.php">Login now(Connexion)</a> </div>
        </section>
</div>
</div>


<?php
require_once "../footer/footer.php";
?>
