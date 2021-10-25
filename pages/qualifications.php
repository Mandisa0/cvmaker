<?php
session_start();

if (!isset($_SESSION['completion'][0])) {

    header("Location: personal details.php");
    exit();
}

if (!isset($_SESSION['completion'][1])) {

    header("Location: education.php");
    exit();
}

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

        <form action="../php/qualifications script.php" method="POST">

            <div class="container_form">

                <h1 class="header">Qualifications</h1>

                </br>
                </br>

                <img src="../icon packs/149086-essential-set/png/diploma.png" width="250" height="250">

                </br>
                </br>
                </br>
                </br>

                </br>
                </br>


                <input name="input1a" id="input1a" type="text" placeholder="qualification name" />
                <input name="input1b" id="input1b" type="text" placeholder="institution name" style="margin-bottom: 10;" />
                </br>
                <div class="desktop">
                    <p class="gen-black" style="display:inline-block;float:left;margin-left:300;">start date</p>
                    <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                    <p class="gen-black" style="display:inline-block;float:right;margin-right:300;">end date</p>
                </div>
                <div class="mobile">
                    <p class="gen-black" style="display:inline-block;float:left;margin-left:0;">start date</p>
                    <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                    <p class="gen-black" style="display:inline-block;float:right;margin-right:0;">end date</p>
                </div>
                </br>
                <input style="width:45%;display:inline-block;margin-right:0;" name="input1c" id="input1c" type="month" />
                <input style="width:45%;display:inline-block;margin-left:0;" name="input1d" id="input1d" type="month" />
                </br>
                <button id="add1" type="button" class="gen">
                    <p class="gen-black">add qualification</p>
                </button>

                <div id="content1" style="display:none">

                    </br>
                    </br>


                    <input name="input2a" id="input2a" type="text" placeholder="qualification name" />
                    <input name="input2b" id="input2b" type="text" placeholder="institution name" style="margin-bottom: 10;" />
                    </br>
                    <div class="desktop">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:300;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:300;">end date</p>
                    </div>
                    <div class="mobile">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:0;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:0;">end date</p>
                    </div>
                    </br>
                    <input style="width:45%;display:inline-block;margin-right:0;" name="input2c" id="input2c" type="month" />
                    <input style="width:45%;display:inline-block;margin-left:0;" name="input2d" id="input2d" type="month" />
                    </br>
                    <button id="add2" type="button" class="gen">
                        <p class="gen-black">add qualification</p>
                    </button>
                    <button id="remove1" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content2" style="display:none">

                    </br>
                    </br>

                    <input name="input3a" id="input3a" type="text" placeholder="qualification name" />
                    <input name="input3b" id="input3b" type="text" placeholder="institution name" style="margin-bottom: 10;" />
                    </br>
                    <div class="desktop">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:300;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:300;">end date</p>
                    </div>
                    <div class="mobile">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:0;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:0;">end date</p>
                    </div>
                    </br>
                    <input style="width:45%;display:inline-block;margin-right:0;" name="input3c" id="input3c" type="month" />
                    <input style="width:45%;display:inline-block;margin-left:0;" name="input3d" id="input3d" type="month" />
                    </br>
                    <button id="add3" type="button" class="gen">
                        <p class="gen-black">add qualification</p>
                    </button>
                    <button id="remove2" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content3" style="display:none">

                    </br>
                    </br>

                    <input name="input4a" id="input4a" type="text" placeholder="qualification name" />
                    <input name="input4b" id="input4b" type="text" placeholder="institution name" style="margin-bottom: 10;" />
                    </br>
                    <div class="desktop">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:300;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:300;">end date</p>
                    </div>
                    <div class="mobile">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:0;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:0;">end date</p>
                    </div>
                    </br>
                    <input style="width:45%;display:inline-block;margin-right:0;" name="input4c" id="input1c" type="month" />
                    <input style="width:45%;display:inline-block;margin-left:0;" name="input4d" id="input1d" type="month" />
                    </br>
                    <button id="add4" type="button" class="gen">
                        <p class="gen-black">add qualification</p>
                    </button>
                    <button id="remove3" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content4" style="display:none">

                    </br>
                    </br>

                    <input name="input5a" id="input5a" type="text" placeholder="qualification name" />
                    <input name="input5b" id="input5b" type="text" placeholder="institution name" style="margin-bottom: 10;" />
                    </br>
                    <div class="desktop">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:300;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:300;">end date</p>
                    </div>
                    <div class="mobile">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:0;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:0;">end date</p>
                    </div>
                    </br>
                    <input style="width:45%;display:inline-block;margin-right:0;" name="input5c" id="input1c" type="month" />
                    <input style="width:45%;display:inline-block;margin-left:0;" name="input5d" id="input1d" type="month" />
                    </br>
                    <button id="add5" type="button" class="gen">
                        <p class="gen-black">add qualification</p>
                    </button>
                    <button id="remove4" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content5" style="display:none">

                    </br>
                    </br>

                    <input name="input6a" id="input6a" type="text" placeholder="qualification name" />
                    <input name="input6b" id="input6b" type="text" placeholder="institution name" style="margin-bottom: 10;" />
                    </br>
                    <div class="desktop">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:300;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:300;">end date</p>
                    </div>
                    <div class="mobile">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:0;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:0;">end date</p>
                    </div>
                    </br>
                    <input style="width:45%;display:inline-block;margin-right:0;" name="input6c" id="input6c" type="month" />
                    <input style="width:45%;display:inline-block;margin-left:0;" name="input6d" id="input6d" type="month" />
                    </br>
                    <button id="add6" type="button" class="gen">
                        <p class="gen-black">add qualification</p>
                    </button>
                    <button id="remove5" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content6" style="display:none">

                    </br>
                    </br>

                    <input name="input7a" id="input7a" type="text" placeholder="qualification name" />
                    <input name="input7b" id="input7b" type="text" placeholder="institution name" style="margin-bottom: 10;" />
                    </br>
                    <div class="desktop">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:300;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:300;">end date</p>
                    </div>
                    <div class="mobile">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:0;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:0;">end date</p>
                    </div>
                    </br>
                    <input style="width:45%;display:inline-block;margin-right:0;" name="input7c" id="input7c" type="month" />
                    <input style="width:45%;display:inline-block;margin-left:0;" name="input7d" id="input7d" type="month" />
                    </br>
                    <button id="add7" type="button" class="gen">
                        <p class="gen-black">add qualification</p>
                    </button>
                    <button id="remove6" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content7" style="display:none">

                    </br>
                    </br>

                    <input name="input8a" id="input8a" type="text" placeholder="qualification name" />
                    <input name="input8b" id="input8b" type="text" placeholder="institution name" style="margin-bottom: 10;" />
                    </br>
                    <div class="desktop">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:300;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:300;">end date</p>
                    </div>
                    <div class="mobile">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:0;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:0;">end date</p>
                    </div>
                    </br>
                    <input style="width:45%;display:inline-block;margin-right:0;" name="input8c" id="input8c" type="month" />
                    <input style="width:45%;display:inline-block;margin-left:0;" name="input8d" id="input8d" type="month" />
                    </br>
                    <button id="add8" type="button" class="gen">
                        <p class="gen-black">add qualification</p>
                    </button>
                    <button id="remove7" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content8" style="display:none">

                    </br>
                    </br>

                    <input name="input9a" id="input9a" type="text" placeholder="qualification name" />
                    <input name="input9b" id="input9b" type="text" placeholder="institution name" style="margin-bottom: 10;" />
                    </br>
                    <div class="desktop">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:300;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:300;">end date</p>
                    </div>
                    <div class="mobile">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:0;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:0;">end date</p>
                    </div>
                    </br>
                    <input style="width:45%;display:inline-block;margin-right:0;" name="input9c" id="input9c" type="month" />
                    <input style="width:45%;display:inline-block;margin-left:0;" name="input9d" id="input9d" type="month" />
                    </br>
                    <button id="add9" type="button" class="gen">
                        <p class="gen-black">add qualification</p>
                    </button>
                    <button id="remove8" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content9" style="display:none">

                    </br>
                    </br>

                    <input name="input10a" id="input10a" type="text" placeholder="qualification name" />
                    <input name="input10b" id="input10b" type="text" placeholder="institution name" style="margin-bottom: 10;" />
                    </br>
                    <div class="desktop">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:300;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:300;">end date</p>
                    </div>
                    <div class="mobile">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:0;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:0;">end date</p>
                    </div>
                    </br>
                    <input style="width:45%;display:inline-block;margin-right:0;" name="input10c" id="input1c" type="month" />
                    <input style="width:45%;display:inline-block;margin-left:0;" name="input10d" id="input1d" type="month" />
                    </br>
                    <button id="remove9" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content10" style="display:none">

                    </br>
                    </br>

                    <input name="input11a" id="input1a" type="text" placeholder="qualification name" />
                    <input name="input11b" id="input11b" type="text" placeholder="institution name" style="margin-bottom: 10;" />
                    </br>
                    <div class="desktop">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:300;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:300;">end date</p>
                    </div>
                    <div class="mobile">
                        <p class="gen-black" style="display:inline-block;float:left;margin-left:0;">start date</p>
                        <p class="gen-black" style="display:inline-block;margin-bottom:20;"></p>
                        <p class="gen-black" style="display:inline-block;float:right;margin-right:0;">end date</p>
                    </div>
                    </br>
                    <input style="width:45%;display:inline-block;margin-right:0;" name="input11c" id="input1c" type="month" />
                    <input style="width:45%;display:inline-block;margin-left:0;" name="input11d" id="input1d" type="month" />
                    </br>
                    <button id="remove9" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                </br>
                </br>
                </br>
                </br>
                </br>
                </br>

                <a class="clean" href="education.php">
                    <button class="gen1" type="button">
                        <p class="body">Previous</p>
                    </button>
                </a>

                <a class="clean" href="experience.php">
                    <button class="gen1" type="submit" name="submit">
                        <p class="body">Next</p>
                    </button>
                </a>

                <a class="clean" href="experience.php">
                    <button style="border-radius: 100px;width:60;height:60;margin:5;" class="gen1" type="submit" name="skip">
                        <p class="body">Skip</p>
                    </button>
                </a>

                </br>
                </br>
                </br>

                <p class="gen-black">3/8</p>

                </br>
                </br>

            </div>

        </form>

    </center>

</body>

</html>