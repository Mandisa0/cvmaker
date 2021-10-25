<?php

require('Phantom/Phantom DB.php');
session_start();

if (!isset($_POST['submit'])) {

    if (!isset($_POST['skip'])) {
        Header('Location: ../pages/qualifications.php');
        exit();
    }
}

$_POST['input1a'] = filter_var($_POST['input1a'], FILTER_SANITIZE_STRING);
$_POST['input2a'] = filter_var($_POST['input2a'], FILTER_SANITIZE_STRING);
$_POST['input3a'] = filter_var($_POST['input3a'], FILTER_SANITIZE_STRING);
$_POST['input4a'] = filter_var($_POST['input4a'], FILTER_SANITIZE_STRING);
$_POST['input5a'] = filter_var($_POST['input5a'], FILTER_SANITIZE_STRING);
$_POST['input6a'] = filter_var($_POST['input6a'], FILTER_SANITIZE_STRING);
$_POST['input7a'] = filter_var($_POST['input7a'], FILTER_SANITIZE_STRING);
$_POST['input8a'] = filter_var($_POST['input8a'], FILTER_SANITIZE_STRING);
$_POST['input9a'] = filter_var($_POST['input9a'], FILTER_SANITIZE_STRING);
$_POST['input10a'] = filter_var($_POST['input10a'], FILTER_SANITIZE_STRING);
$_POST['input11a'] = filter_var($_POST['input11a'], FILTER_SANITIZE_STRING);

$_POST['input1b'] = filter_var($_POST['input1b'], FILTER_SANITIZE_STRING);
$_POST['input2b'] = filter_var($_POST['input2b'], FILTER_SANITIZE_STRING);
$_POST['input3b'] = filter_var($_POST['input3b'], FILTER_SANITIZE_STRING);
$_POST['input4b'] = filter_var($_POST['input4b'], FILTER_SANITIZE_STRING);
$_POST['input5b'] = filter_var($_POST['input5b'], FILTER_SANITIZE_STRING);
$_POST['input6b'] = filter_var($_POST['input6b'], FILTER_SANITIZE_STRING);
$_POST['input7b'] = filter_var($_POST['input7b'], FILTER_SANITIZE_STRING);
$_POST['input8b'] = filter_var($_POST['input8b'], FILTER_SANITIZE_STRING);
$_POST['input9b'] = filter_var($_POST['input9b'], FILTER_SANITIZE_STRING);
$_POST['input10b'] = filter_var($_POST['input10b'], FILTER_SANITIZE_STRING);
$_POST['input11b'] = filter_var($_POST['input11b'], FILTER_SANITIZE_STRING);

$_POST['input1c'] = filter_var($_POST['input1c'], FILTER_SANITIZE_STRING);
$_POST['input2c'] = filter_var($_POST['input2c'], FILTER_SANITIZE_STRING);
$_POST['input3c'] = filter_var($_POST['input3c'], FILTER_SANITIZE_STRING);
$_POST['input4c'] = filter_var($_POST['input4c'], FILTER_SANITIZE_STRING);
$_POST['input5c'] = filter_var($_POST['input5c'], FILTER_SANITIZE_STRING);
$_POST['input6c'] = filter_var($_POST['input6c'], FILTER_SANITIZE_STRING);
$_POST['input7c'] = filter_var($_POST['input7c'], FILTER_SANITIZE_STRING);
$_POST['input8c'] = filter_var($_POST['input8c'], FILTER_SANITIZE_STRING);
$_POST['input9c'] = filter_var($_POST['input9c'], FILTER_SANITIZE_STRING);
$_POST['input10c'] = filter_var($_POST['input10c'], FILTER_SANITIZE_STRING);
$_POST['input11c'] = filter_var($_POST['input11c'], FILTER_SANITIZE_STRING);

$_POST['input1d'] = filter_var($_POST['input1d'], FILTER_SANITIZE_STRING);
$_POST['input2d'] = filter_var($_POST['input2d'], FILTER_SANITIZE_STRING);
$_POST['input3d'] = filter_var($_POST['input3d'], FILTER_SANITIZE_STRING);
$_POST['input4d'] = filter_var($_POST['input4d'], FILTER_SANITIZE_STRING);
$_POST['input5d'] = filter_var($_POST['input5d'], FILTER_SANITIZE_STRING);
$_POST['input6d'] = filter_var($_POST['input6d'], FILTER_SANITIZE_STRING);
$_POST['input7d'] = filter_var($_POST['input7d'], FILTER_SANITIZE_STRING);
$_POST['input8d'] = filter_var($_POST['input8d'], FILTER_SANITIZE_STRING);
$_POST['input9d'] = filter_var($_POST['input9d'], FILTER_SANITIZE_STRING);
$_POST['input10d'] = filter_var($_POST['input10d'], FILTER_SANITIZE_STRING);
$_POST['input11d'] = filter_var($_POST['input11d'], FILTER_SANITIZE_STRING);

if( $_POST['input1c'] != "" && $_POST['input1d'] ){

    $_POST['input1c']="start date: ".$_POST['input1c'];
    $_POST['input1d']="end date:   ".$_POST['input1d'];

}

if( $_POST['input2c'] != "" && $_POST['input2d'] ){

    $_POST['input2c']="start date: ".$_POST['input2c'];
    $_POST['input2d']="end date:   ".$_POST['input2d'];

}

if( $_POST['input3c'] != "" && $_POST['input3d'] ){

    $_POST['input3c']="start date: ".$_POST['input3c'];
    $_POST['input3d']="end date:   ".$_POST['input3d'];

}

if( $_POST['input4c'] != "" && $_POST['input4d'] ){

    $_POST['input4c']="start date: ".$_POST['input4c'];
    $_POST['input4d']="end date:   ".$_POST['input4d'];

}

if( $_POST['input5c'] != "" && $_POST['input5d'] ){

    $_POST['input5c']="start date: ".$_POST['input5c'];
    $_POST['input5d']="end date:   ".$_POST['input5d'];

}

if( $_POST['input6c'] != "" && $_POST['input6d'] ){

    $_POST['input6c']="start date: ".$_POST['input6c'];
    $_POST['input6d']="end date:   ".$_POST['input6d'];

}

if( $_POST['input7c'] != "" && $_POST['input7d'] ){

    $_POST['input7c']="start date: ".$_POST['input7c'];
    $_POST['input7d']="end date:   ".$_POST['input7d'];

}

if( $_POST['input8c'] != "" && $_POST['input8d'] ){

    $_POST['input8c']="start date: ".$_POST['input8c'];
    $_POST['input8d']="end date:   ".$_POST['input8d'];

}

if( $_POST['input9c'] != "" && $_POST['input9d'] ){

    $_POST['input9c']="start date: ".$_POST['input9c'];
    $_POST['input9d']="end date:   ".$_POST['input9d'];

}

if( $_POST['input10c'] != "" && $_POST['input10d'] ){

    $_POST['input10c']="start date: ".$_POST['input10c'];
    $_POST['input10d']="end date:   ".$_POST['input10d'];

}

if( $_POST['input11c'] != "" && $_POST['input1d'] ){

    $_POST['input11c']="start date: ".$_POST['input11c'];
    $_POST['input11d']="end date:   ".$_POST['input11d'];

}

$_SESSION['qualifications'] =  array(

    "input1a" => $_POST['input1a'],
    "input2a" => $_POST['input2a'],
    "input3a" => $_POST['input3a'],
    "input4a" => $_POST['input4a'],
    "input5a" => $_POST['input5a'],
    "input6a" => $_POST['input6a'],
    "input7a" => $_POST['input7a'],
    "input8a" => $_POST['input8a'],
    "input9a" => $_POST['input9a'],
    "input10a" => $_POST['input10a'],
    "input11a" => $_POST['input11a'],

    "input1b" => $_POST['input1b'],
    "input2b" => $_POST['input2b'],
    "input3b" => $_POST['input3b'],
    "input4b" => $_POST['input4b'],
    "input5b" => $_POST['input5b'],
    "input6b" => $_POST['input6b'],
    "input7b" => $_POST['input7b'],
    "input8b" => $_POST['input8b'],
    "input9b" => $_POST['input9b'],
    "input10b" => $_POST['input10b'],
    "input11b" => $_POST['input11b'],

    "input1c" => $_POST['input1c'],
    "input2c" => $_POST['input2c'],
    "input3c" => $_POST['input3c'],
    "input4c" => $_POST['input4c'],
    "input5c" => $_POST['input5c'],
    "input6c" => $_POST['input6c'],
    "input7c" => $_POST['input7c'],
    "input8c" => $_POST['input8c'],
    "input9c" => $_POST['input9c'],
    "input10c" => $_POST['input10c'],
    "input11c" => $_POST['input11c'],

    "input1d" => $_POST['input1d'],
    "input2d" => $_POST['input2d'],
    "input3d" => $_POST['input3d'],
    "input4d" => $_POST['input4d'],
    "input5d" => $_POST['input5d'],
    "input6d" => $_POST['input6d'],
    "input7d" => $_POST['input7d'],
    "input8d" => $_POST['input8d'],
    "input9d" => $_POST['input9d'],
    "input10d" => $_POST['input10d'],
    "input11d" => $_POST['input11d']

);

if (isset($_POST['skip'])) {

    $_SESSION['qualifications'] =  array(

        "input1a" => "none",
        "input2a" => "",
        "input3a" => "",
        "input4a" => "",
        "input5a" => "",
        "input6a" => "",
        "input7a" => "",
        "input8a" => "",
        "input9a" => "",
        "input10a" => "",
        "input11a" => "",

        "input1b" => "",
        "input2b" => "",
        "input3b" => "",
        "input4b" => "",
        "input5b" => "",
        "input6b" => "",
        "input7b" => "",
        "input8b" => "",
        "input9b" => "",
        "input10b" => "",
        "input11b" => "",

        "input1c" => "",
        "input2c" => "",
        "input3c" => "",
        "input4c" => "",
        "input5c" => "",
        "input6c" => "",
        "input7c" => "",
        "input8c" => "",
        "input9c" =>  "",
        "input10c" => "",
        "input11c" => "",

        "input1d" => "",
        "input2d" => "",
        "input3d" => "",
        "input4d" => "",
        "input5d" => "",
        "input6d" => "",
        "input7d" => "",
        "input8d" => "",
        "input9d" => "",
        "input10d" => "",
        "input11d" => ""

    );

    Header('Location: ../pages/experience.php');
    exit();
}

//print_r($_SESSION['qualifications']);

$_SESSION['completion'][2] = true;

Header('Location: ../pages/experience.php');
