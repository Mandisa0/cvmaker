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

    </br>
    </br>
    </br>
    </br>



    </br>
    </br>

    <center>

    <form action="../php/personal details script.php" method="POST" >

        <div class="container_form">

            <h1 class="header">Personal Details</h1>

            </br>
            </br>

            <img src="../icon packs/149086-essential-set/png/user.png" width="250" height="250">

            </br>
            </br>
            </br>
            </br>

            <h3 class="gen">Firstname</h3>

            <input name="firstname" type="text" required/>

            <h3 class="gen">Lastname</h3>

            <input name="lastname" type="text" required/>

            <h3 class="gen">Email</h3>

            <input name="email" type="email" required/>

            <h3 class="gen">Phone number</h3>

            <input name="phone_number" type="number" required/>

            </br>
            </br>
            </br>
            </br>
            </br>
            </br>

            <a class="clean" href="education.php">
                <button class="gen1" type="submit" name="submit">
                    <p class="body">Next</p>
                </button>
            </a>

            </br>
                </br>
                </br>

                <p class="gen-black">1/8</p>

                </br>
                </br>

        </div>

    </form>

    </center>

    <?php require("main footer.php") ?>

</body>

</html>