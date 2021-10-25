<?php

    session_start();

    ?>



<html>



<head>





    



    <meta name="viewport" content="width=device-width,initial-scale=1.0">



    <link rel="stylesheet" type="text/css" href="../css/phantom.css" />



    <script type="text/javascript" src="../javascript/jquery-3.6.0.js"></script>

    <script type="text/javascript" src="../javascript/ui.js">

    </script>

    <script type="text/javascript" src="../javascript/menu script.js"></script>





</head>



<body>



    <?php require("main header.php") ?>

    <?php require("side menu.php") ?>





    <center>

        <div style="margin-top: 100;background-color:white;width:90%;padding-top:50;padding-bottom:50;border: 0px solid black;">



            <h1 style="margin-bottom: 50;" class="header" class="gen_black">Notice</h1>



          <h3 class="gen_black">next up, you have to enter some basic information</h3>
          <h3 class="gen_black">about yourself so the app can generate your cv</h3>

          <p class="gen_black">*note: cvmaker does not save or store any of your information</p>

            </br>

            </br>

            </br>



            <a href="personal details.php">

                <button style="background-color: transparent;" class="update">

                    <h2 class="gen_black">Continue</h2>

                </button>

            </a>



        </div>

    </center>



    <?php require("side menu.php") ?>





    



    <?php require("main footer.php") ?>



</body>



</html>