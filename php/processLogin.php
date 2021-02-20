<?php 
    require_once ('../core/config.php');
    // Create connection
    session_unset();
    
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    // print_r($_POST);

    //If there are post variables being sent. 
    if($_POST) {

        if($_POST['email'] != '' && $_POST['password'] != '') {
            
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            // Login Logic.
            $result = $conn->query("SELECT * FROM `users` WHERE `email` = '$email'");                        
            if ($result->num_rows > 0) {                                
                foreach ($result->fetch_assoc() as $res => $value) {                    
                    //Fetched the user data from DB based on the email provided.

                    $_SESSION[$res] = $value;                                                             
                    
                    if($res == 'password') {
                        if($password == $value) {                                                        
                            $_SESSION['logged_in'] = true;                                                
                            //Redirect.
                            header('Location: ../events.php');
                        } else {
                            echo "Password is incorrect";
                            session_unset();
                        }
                    }                                                                                    
                }                
            } else {
                echo "Whoops! No user found with the email ID " . $email;
            }                        
        } else {
            echo "Email or Password is missing";
        }
        
    } else {
        echo "Error: ONLY Post method allowed";
    }



    $conn->close();  
?>
