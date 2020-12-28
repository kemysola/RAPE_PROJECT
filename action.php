<?php

$conn = mysqli_connect("3.9.173.117","temi","temi123","rapeproject");
if(!$conn){
    echo "connection error:";
};


    if(isset($_POST['submit'])){
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);


        $sql = "INSERT INTO `victims`(firstname, lastname, email, phonenumber, address, message) VALUES('$firstname', '$lastname', '$email', '$phonenumber', '$address', '$message')";
       

       

        	// save to db and check
			if(mysqli_query($conn, $sql)){
				// success
                header('Location: index.php');
                echo "success";
			} else {
				echo 'error: '. mysqli_error($conn);
			}
            
           
    
        };
   
?>
