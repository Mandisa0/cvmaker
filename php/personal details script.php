<?php
session_start();

require('Phantom/Phantom DB.php');


if (!isset($_POST['submit'])) {

    Header('Location: ../pages/personal details.php');
    exit();
}

$_POST['firstname'] = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
$_POST['lastname'] = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
$_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$_POST['phone_number'] = filter_var($_POST['phone_number'], FILTER_SANITIZE_STRING);

$_SESSION['personal_details'] =  array(
    "firstname" => $_POST['firstname'], 
    "lastname" => $_POST['lastname'], 
    "email" => $_POST['email'], 
    "phone_number" => $_POST['phone_number']
);

//print_r($_SESSION['personal_details']);

$_SESSION['completion'][0] = true;

Header('Location: ../pages/education.php');
exit();

