<?php

    //database connection
    $conn = mysqli_connect('localhost', 'root', '', 'microsoftclub');

    $firstName = $_POST['contactFname'];
    $lastName = $_POST['contactLname'];
    $email = $_POST['contactEmail'];
    $regNum = $_POST['contactSubject'];
    $message = $_POST['contactMessage'];

    $sql = "INSERT INTO `studentinfo` ( `id`, `fname`, `lname`, `email`, `regnum`, `message`)  VALUES ('0','$firstName', '$lastName','$email','$regNum','$message')";
 
    if(mysqli_query($conn, $sql))
    {
        echo "Microsoft Technical Club VITB,  Congratulations🎉 Thank you!  ";
    } 

    mysqli_close($conn);

?>