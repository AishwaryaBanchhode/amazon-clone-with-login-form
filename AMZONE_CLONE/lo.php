<?php
$email = $_POST['email'];
            $password = $_POST['password'];
           
            $conn = new mysqli("localhost", "root", "", "login_form");
            if($conn->connect_error){
                echo "failed to connect DB".$conn->connect_error;
                } 
                else{
                $stmt = $conn->prepare("SELECT * FROM user WHERE email = ?");
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $stmt_result = $stmt->get_result();
                if($stmt_result->num_rows > 0){
                    $data = $stmt_result->fetch_assoc();
                    if($data['password'] === $password){
                        echo "Login Sucessfully";
                    }else{
                        echo "Invalid Email or password";
                    }
                }else {

                    echo "Invalid Email or password";
                }
              
}
?>