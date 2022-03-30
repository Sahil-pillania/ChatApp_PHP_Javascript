<?php

include_once "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        // let's check user email is valid or not 
        if(filter_var($email, FILTER_VALIDATE_EMAIL )){
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_row($sql) >0){ // if email already exists
                echo "$email - already exists";
            }else{
                // let's check user upload file or not
                if(isset($_FILES['file'])){
                    //if file is uploaded
                    $img_name = $_FILES['image']['name']; // getting user uploaded img name
                    $img_type = $_FILES['image']['type']; // getting user uploaded img type
                    $tmp_name = $_FILES['image']['temp_name']; // getting img temp name to save/move file in folder
                    
                    // exploding image and get the last extension
                    $img_explode = explode(".", $img_name);
                    $img_ext = end($img_explode); // here we get the extension of an user uploaded img file

                    $extensions = ['png','jpeg', 'jpg']; // these are the valid exts for file
                    if(in_array($img_ext, $extensions) === true){
                        // if user uploaded img ext is matched with any array extensions
                        $time = time();
                        // let's move the user uploaded img to our folder
                        $new_img_name = $time.$img_name;
                        
                        if(move_uploaded_file($tmp_name, "images/".$new_img_name)){
                        $status = "Active now"; 
                        $random_id = ran(time(). 10000000);
                        }
                    }else{
                        echo "Plese select an Image file -jpeg, jpg, png! format";
                    }
                }else{
                    echo "Please select an image file!";

                }

            }
        }else{
            echo "$email - email is not valid!";
        }
}else{
    echo "All input fields are required";
}