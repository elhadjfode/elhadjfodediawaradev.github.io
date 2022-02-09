<?php require_once "headers.php"; ?>
    <div class="wrapper">
        <section class="form signup">
            <header> Registration Chat messenger Php Ajax</header>
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
                    <div class="field image">
                        <label> Image</label>
                        <input type="file" name="image" required>
                    </div>
                <div class="field button">
                        <input type="submit" placeholder="Inscription">
                </div> 
            </form>
            <div class="link">Andrey And up?<a href="login.php">Login now(Connexion)</a> </div>
        </section>
    </div>
    <script src="js/show_hide.js"></script>
    <script src="js/signup.js"></script>
</body>
</html>