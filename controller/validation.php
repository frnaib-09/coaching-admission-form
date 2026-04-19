<?php
include_once '../layouts/header.php';

$name = $_REQUEST['full_name'];
$userName = $_REQUEST['userName'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['mail'];
$password = $_REQUEST['pass'];
$payment = $_REQUEST['payment'];
$gender = $_REQUEST['gender'];
$errors = [];

if(strlen($name) < 3) {
    $errors['name_error'] = "*Name must contain more than 3 characters";
}

if(strlen($userName) < 5) {
    $errors['userName_error'] = "*Username must contain at least 5 characters";
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email_error'] ="*Invalid e-mail";
}

if(strlen($phone) < 11) {
    $errors['phone_number_error'] = "*Phone Number must contain 11 digits";
}

if(strlen($password) > 32 || strlen($password) < 8){
    $errors ['passowrd_error'] = "*Password must contain 8 to 32 characters";
}

if(count($errors) > 0) {
    $_SESSION['valid_data'] = $_REQUEST;
    $_SESSION['form_errors'] = $errors;
    header('Location: ../index.php');
} else {
    include_once '../database/env.php';
    $query = "INSERT INTO `admission_form`(`name`, `username`, `phone`, `email`, `password`, `payment`, `gender`) VALUES ('$name','$userName','$phone','$email','$password','$payment','$gender')";
    $response = mysqli_query($connection, $query);

    if($response) {
        header("Location: ../list.php");
    } else {
        header ("Location: ../index.php");
    }
}