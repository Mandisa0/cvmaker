<?php
    session_start();

    if( !isset($_SESSION['completion'][0] ) ){

        header("Location: personal details.php");
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

    <!-- menu !-->

    <?php
    require("side menu.php");
    ?>

    <!-- menu !-->

    </br>
    </br>
    </br>
    </br>



    </br>
    </br>

    <center>

        <form action="../php/education script.php" method="POST">

            <div class="container_form">

                <h1 class="header">Education</h1>

                </br>
                </br>

                <img src="../icon packs/149086-essential-set/png/notebook-1.png" width="250" height="250">

                </br>
                </br>
                </br>
                </br>

                <h3 class="gen_black">Highest grade passed</h3>

           <!--     <p class="gen-black" id="rangeVal">1</p> -->

           </br>

                <input style="width:50%;margin-top:-25;margin-bottom:0;" name="highest_grade_passed" id="range1" type="number" min="1" max="12" value="1" />

                <h3 class="gen_black">Year</h3>

                <input id="datePicker" style="width:50%;" name="year" id="input1a" type="month" required />


                <h3 class="gen_black">Institution name</h3>

                <input name="institution_name" id="input1" type="text" required />

                <h3 class="gen_black">Subjects</h3>

                <input name="input1" id="input1" type="text" style="width:50%" placeholder="subject name" required />
                </br>
                <button id="add1" type="button" class="gen">
                    <p class="gen-black">add subject</p>
                </button>

                <div id="content1" style="display:none">

                    </br>
                    </br>

                    <input name="input2" id="input2" type="text" style="width:50%" placeholder="subject name" />
                    </br>
                    <button id="add2" type="button" class="gen">
                        <p class="gen-black">add subject</p>
                    </button>
                    <button id="remove1" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content2" style="display:none">

                    </br>
                    </br>

                    <input name="input3" id="input3" type="text" style="width:50%" placeholder="subject name" />
                    </br>
                    <button id="add3" type="button" class="gen">
                        <p class="gen-black">add subject</p>
                    </button>
                    <button id="remove2" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content3" style="display:none">

                    </br>
                    </br>

                    <input name="input4" id="input4" type="text" style="width:50%" placeholder="subject name" />
                    </br>
                    <button id="add4" type="button" class="gen">
                        <p class="gen-black">add subject</p>
                    </button>
                    <button id="remove3" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content4" style="display:none">

                    </br>
                    </br>

                    <input name="input5" id="input5" type="text" style="width:50%" placeholder="subject name" />
                    </br>
                    <button id="add5" type="button" class="gen">
                        <p class="gen-black">add subject</p>
                    </button>
                    <button id="remove4" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content5" style="display:none">

                    </br>
                    </br>

                    <input name="input6" id="input6" type="text" style="width:50%" placeholder="subject name" />
                    </br>
                    <button id="add6" type="button" class="gen">
                        <p class="gen-black">add subject</p>
                    </button>
                    <button id="remove5" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content6" style="display:none">

                    </br>
                    </br>

                    <input name="input7" id="input7" type="text" style="width:50%" placeholder="subject name" />
                    </br>
                    <button id="add7" type="button" class="gen">
                        <p class="gen-black">add subject</p>
                    </button>
                    <button id="remove6" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content7" style="display:none">

                    </br>
                    </br>

                    <input name="input8" id="input8" type="text" style="width:50%" placeholder="subject name" />
                    </br>
                    <button id="add8" type="button" class="gen">
                        <p class="gen-black">add subject</p>
                    </button>
                    <button id="remove7" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content8" style="display:none">

                    </br>
                    </br>

                    <input name="input9" id="input9" type="text" style="width:50%" placeholder="subject name" />
                    </br>
                    <button id="add9" type="button" class="gen">
                        <p class="gen-black">add subject</p>
                    </button>
                    <button id="remove8" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content9" style="display:none">

                    </br>
                    </br>

                    <input name="input10" id="input10" type="text" style="width:50%" placeholder="subject name" />
                    </br>
                    <button id="remove9" type="button" class="gen">
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content10" style="display:none">

                    </br>
                    </br>

                    <input name="input11" id="input11" type="text" style="width:50%" placeholder="subject name" />
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

                <a class="clean" href="personal details.php">
                    <button class="gen1" type="button">
                        <p class="body">Previous</p>
                    </button>
                </a>

                <a class="clean" href="qualifications.php">
                    <button class="gen1" type="submit" name="submit">
                        <p class="body">Next</p>
                    </button>
                </a>

                </br>
                </br>
                </br>

                <p class="gen-black">2/8</p>

                </br>
                </br>

            </div>

        </form>

    </center>

    <?php require("main footer.php") ?>

</body>

</html>