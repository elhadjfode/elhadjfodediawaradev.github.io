<?php require_once "../header/header.php";?>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                    <div class="content">    
                    <a href="users.php" class="black-icon"><i class="fa fa-arrow-left"></i></a>
                    <img src="../public/img/dia.jpg" alt="">
                    <div class="details">
                        <span>Leloupdu Net</span>
                        <p>status</p>
                    </div>
                </div>
                <a href="" class="logout">Logout</a>
            </header>
            <div class="chat-box chatt">
                <div  class="chat outgoing">
                        <div class="details">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, numquam.</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="../public/img/dia.jpg" alt="">
                    <div class="details">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, numquam.</p>
                    </div>
                </div>
                <div  class="chat outgoing">
                        <div class="details">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, numquam.</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="../public/img/dia.jpg" alt="">
                    <div class="details">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, numquam.</p>
                    </div>
                </div>
                <div  class="chat outgoing">
                        <div class="details">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, numquam.</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="../public/img/dia.jpg" alt="">
                    <div class="details">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, numquam.</p>
                    </div>
                </div>
                <div  class="chat outgoing">
                        <div class="details">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, numquam.</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="../public/img/dia.jpg" alt="">
                    <div class="details">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, numquam.</p>
                    </div>
                </div>
            </div>
            <form action="#" class="typing-area" autocomplete="off">
                <input type="text" name="outgoing_id" value="" hidden>
                <input type="text" name="incoming_id" value="" hidden>
                <input type="text" name="message" class="input-field" placeholder="message...">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
    <?php 
        require_once "../footer/footer.php"
    ?>