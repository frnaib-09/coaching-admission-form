<?php
session_start();
    $full_name = $_REQUEST['full_name'];
    $phone_number = $_REQUEST['phone'];
    $email = $_REQUEST['mail'];
    $errors = [];
if (isset($_REQUEST['full_name'])) {

    if (strlen($full_name) < 3) {
        $errors['full_name_error']  = "Full name must be at least 3 characters long.";
    }
}

if (isset($_POST['phone'])) {
    $phone = preg_replace('/\D/', '', $_POST['phone']);

    if (strlen($phone) < 11) {
        $errors['phone_number_error'] = "Phone number must be at least 11 digits.";
    }
}

if(count($errors) > 0) {
    $_SESSION['form_errors'] = $errors;
    header("Location: ../index.php");
} else {
    echo "DB saved";
}
session_unset();