<?php
session_start();
$name = $_REQUEST['full_name'];
$userName = $_REQUEST['userName'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['mail'];
$password = $_REQUEST['pass'];
$password = $_REQUEST['pass'];
$payment = $_REQUEST['payment'];
$gender = $_REQUEST['gender'];
$errors = [];

if(strlen($name) < 3) {
    $errors['name_error'] = "Name must contain more than 3 characters";
}

if(strlen($userName) < 4) {
    $errors['userName_error'] = "Username must contain at least 5 characters";
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email_error'] ="invalid e-mail";
}

if(strlen($phone) < 11) {
    $errors['phone_number_error'] = "Phone Number must contain 11 digits";
}

if(strlen($password) > 32 || strlen($password) < 8){
    $errors ['passowrd_error'] = "Password must contain minimum 8 and maximum characters";
}

if(count($errors) > 0){
    header('Location: ../index.php');
}