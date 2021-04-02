<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resume";

// Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['submit'])) {
    if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['message'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $message = $_POST['message'];
        $query = "INSERT INTO visitors(fname,lname, email, contact, message) values('$fname','$lname','$email','$contact','$message')";
        $run = mysqli_query($conn, $query);
        if($run){
            echo "Thank you for contacting me – I'll get back to you soon!";
        }
        else{
            echo "Oh no This is really embarrassing! :(  Unfortunately You've found some technical glitch, please contact me at ritaviksakpal98@gmail.com so that I can fix this!";
        }
    } else {
        echo "All fields are required";
    }
}
?>
