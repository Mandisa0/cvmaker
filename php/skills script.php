<?php

require('Phantom/Phantom DB.php');
session_start();

if (!isset($_POST['submit'])) {

    Header('Location: ../pages/skills.php');
    exit();
}

$_POST['input1'] = filter_var($_POST['input1'], FILTER_SANITIZE_STRING);
$_POST['input2'] = filter_var($_POST['input2'], FILTER_SANITIZE_STRING);
$_POST['input3'] = filter_var($_POST['input3'], FILTER_SANITIZE_STRING);
$_POST['input4'] = filter_var($_POST['input4'], FILTER_SANITIZE_STRING);
$_POST['input5'] = filter_var($_POST['input5'], FILTER_SANITIZE_STRING);
$_POST['input6'] = filter_var($_POST['input6'], FILTER_SANITIZE_STRING);
$_POST['input7'] = filter_var($_POST['input7'], FILTER_SANITIZE_STRING);
$_POST['input8'] = filter_var($_POST['input8'], FILTER_SANITIZE_STRING);
$_POST['input9'] = filter_var($_POST['input9'], FILTER_SANITIZE_STRING);
$_POST['input10'] = filter_var($_POST['input10'], FILTER_SANITIZE_STRING);
$_POST['input11'] = filter_var($_POST['input11'], FILTER_SANITIZE_STRING);

$_SESSION['skills'] =  array(

    "input1" => $_POST['input1'],
    "input2" => $_POST['input2'],
    "input3" => $_POST['input3'],
    "input4" => $_POST['input4'],
    "input5" => $_POST['input5'],
    "input6" => $_POST['input6'],
    "input7" => $_POST['input7'],
    "input8" => $_POST['input8'],
    "input9" => $_POST['input9'],
    "input10" => $_POST['input10'],
    "input11" => $_POST['input11']

);

//print_r($_SESSION['skills']);

$_SESSION['completion'][4] = true;

Header('Location: ../pages/interests.php');
