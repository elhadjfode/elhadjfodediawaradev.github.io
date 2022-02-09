<?php 
session_start();
include_once ("config.php");
$fname = mysqli_real_escape_string($connect, $_POST['fname']);
$lname = mysqli_real_escape_string($connect, $_POST['lname']);
$email = mysqli_real_escape_string($connect, $_POST['email']);
$password = mysqli_real_escape_string($connect, $_POST['password']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
   
    // verification d'email valid ou, pas
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        
        // si l'email exist dans la base de données
        $sql = mysqli_query($connect,"SELECT email FROM users WHERE email = '{$email}'");
       
        if(mysqli_num_rows($sql) > 0){// si l'email exist dans la base de données
            echo"$email -this email exist";

        }else{//check upload file or  not image

            if(isset($_FILES['image'])){// file si l'image exist is upload

                $img_name = $_FILES['image']['name'];// upload file user name
                $tmp_name = $_FILES['image']['tmp_name'];// tmp_name temporay name save file
                
                // l'st explode image and get file des extensions like jpg png ................
                $img_explode = explode('.', $img_name); 
                $img_ext = end($img_explode); // extension user explode image
                $extensions =['png','jpg','jpeg']; // extensions pour les images

                if(in_array($img_ext, $extensions) === true) {
                    $time = time();

                    // let move the user expload img
                    $new_img_name = $time.$img_name;
                 
                    if(move_uploaded_file( $tmp_name,'images/'.$new_img_name)){// if user expload img move successfully

                    $status = "Active now";// statuson signal status active
                    $random_id = rand(time(), 10000000);// create random imag

                    // lest is insert all inside table
                    $sql2= mysqli_query($connect, "INSERT INTO users( unique_id,	fname, lname, email, password, img, status) 
                                                    VALUES($random_id ,'$fname','$lname','$email','$password','$new_img_name','$status')");
                   
                   if($sql2){// is these data insered
                      $sql3 = mysqli_query($connect, "SELECT * FROM users WHERE email = '{$email}'");
                      
                      if(mysqli_num_rows($sql3) > 0){
                          $row = mysqli_fetch_assoc($sql3);
                          //var_dump($row);
                          //die();

                          $_SESSION['unique_id'] = $row['unique_id'];//usings unique this session we used user unique_id other php 
                        //var_dump($_SESSION);
                          echo"success";

                      }

                    }else{
                        echo"Sometheeng went wrong";
                    }

                  }
            
                }else {
                    echo"Selectionez une image png jpg jpeg";

                }

            }else{
                echo"Selectionez une image svp";
            }
        
        } 
    }else{
        echo "$email email is not valid";
    }

}else{
    echo "Password";
}