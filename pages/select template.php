<?php
    session_start();

    if( !isset($_SESSION['completion'][0] ) ){

        header("Location: personal details.php");
        exit();

    }

    if( !isset($_SESSION['completion'][1] ) ){

        header("Location: education.php");
        exit();

    }

    if( !isset($_SESSION['completion'][2] ) ){

        header("Location: qualifications.php");
        exit();

    }

    if( !isset($_SESSION['completion'][3] ) ){

        header("Location: experience.php");
        exit();

    }

    if( !isset($_SESSION['completion'][4] ) ){

        header("Location: skills.php");
        exit();

    }

    if( !isset($_SESSION['completion'][5] ) ){

        header("Location: interests.php");
        exit();

    }

    if( !isset($_SESSION['completion'][6] ) ){

        header("Location: languages.php");
        exit();

    }

    if( !isset($_SESSION['completion'][7] ) ){

        header("Location: languages.php");
        exit();

    }

    ?>

<html>

<head>


    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../css/phantom.css" />

    

    <style>
        h1.header {

            margin-top: 50;

        }
    </style>

<script type="text/javascript" src="../javascript/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="../javascript/ui.js">
    </script>
    <script type="text/javascript" src="../javascript/menu script.js"></script>

</head>

<body>

    <?php require("main header.php") ?>
    <?php require("side menu.php") ?>

    <center>

        <br>
        <br>
        <br>
        <br>

        

        <div class="desktop">

        
            <div class="container_form" style="border:0;transform:scale(1);width:70%;margin:auto;display:table;margin-top:50;margin-bottom:100;">

            <img src="../icon packs/149086-essential-set/png/like.png" width="100" height="100" />



        <br>
        <br>

        <p class="gen_black">All your details have been entered successfully, now all that's left is for you</p>
        <p class="gen_black">to select a template download your CV!</p>

        <br>
        <br>

        <a href="reset.php">
            <button class="gen1" style="margin-bottom: -100;width:250;" type="submit" name="submit">
                <p class="body">Create a new CV</p>
            </button>
        </a>

        <br>
        <br>    
        <br>
        <br>

                <h1 class="header">Template 1</h1>

                <br>
                

                <iframe style='transform:scale(1);margin-bottom:0;' src="template 1.php" width='80%' height='1400'></iframe>

                <br>
                <br>

<!--not worthy

                <h1 class="header">Template 2</h1>

                <br>

                <iframe style='transform:scale(1);margin-bottom:0;' src="template 2.php" width='80%' height='1400'></iframe>

                <br>
                <br>

                <h1 class="header">Template 3</h1>

                <br>

                <iframe style='transform:scale(1);margin-bottom:0;' src="template 3.php"width='80%' height='1400'></iframe>

                <br>
                <br>
                <br>
                <br>

-->

            </div>

        </div>


        <div class="mobile">

       

        <br>
        <br>

        

            <div class="container_form" style="border:0;transform:scale(1);width:84%;margin-left:-0;display:table;margin-top:50;margin-bottom:100;">
                
                 <img src="../icon packs/149086-essential-set/png/like.png" width="100" height="100" />



            <p class="gen_black">All your details have been entered successfully, now all that's left is for you</p>
        <p class="gen_black">to select a template download your CV!</p>

        <br>
        <br>

        <a href="reset.php">
            <button class="gen1" style="margin-bottom: -100;width:250;" type="submit" name="submit">
                <p class="body">Create a new CV</p>
            </button>
        </a>

    </br>
    </br>
    </br>
    </br>

                <h1 class="header">Template 1</h1>

                <br>



                <iframe style='transform:scale(1);margin-bottom:0;' src="template 1.php" width='100%' height='1400'></iframe>

                <br>
                <br>
<!--not worthy

                <h1 class="header">Template 2</h1>

                <br>
                <iframe style='transform:scale(1);margin-bottom:0;' src="template 2.php" width='100%' height='1400'></iframe>

                <br>
                <br>

                <h1 class="header">Template 3</h1>

                <br>

                <iframe style='transform:scale(1);margin-bottom:0;' src="template 3.php" width='100%' height='1400'></iframe>

                <br>
                <br>
                <br>
                <br>

-->


            </div>


        </div>

    </center>

    <?php require("main footer.php") ?>

</body>

</html>