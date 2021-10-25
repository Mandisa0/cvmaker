<?php

session_start();

require('Phantom/Phantom DB.php');


if (!isset($_POST['submit'])) {

    Header('Location: ../pages/education.php');
    exit();
}

$_POST['highest_grade_passed'] = filter_var($_POST['highest_grade_passed'], FILTER_SANITIZE_STRING);
$_POST['year'] = filter_var($_POST['year'], FILTER_SANITIZE_STRING);
$_POST['institution_name'] = filter_var($_POST['institution_name'], FILTER_SANITIZE_STRING);

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


$_SESSION['education'] =  array(
    "highest_grade_passed" => $_POST['highest_grade_passed'], 
    "year" => $_POST['year'], 
    "institution_name" => $_POST['institution_name'], 

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

//print(sizeof($_SESSION['education']));

$_SESSION['completion'][1] = true;

//print_r($_SESSION['education']);

Header('Location: ../pages/qualifications.php');
exit();
?>