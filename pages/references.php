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

        <form action="../php/references script.php" method="POST" >

            <div class="container_form">

                <h1 class="header">References</h1>

                </br>
            </br>

            <img src="../icon packs/149086-essential-set/png/users.png" width="250" height="250">

            </br>
            </br>
            </br>
            </br>

                </br>
                </br>

                <input name="input1a" id="input1a" type="text" placeholder="firstname" required/>
                <input name="input1b" id="input1b" type="text" placeholder="lastname" required/>
                <input name="input1c" id="input1c" type="text" placeholder="email" required/>
                <input name="input1d" id="input1d" type="text" placeholder="cell-number" required/>
                </br>
                <button id="add1" type="button" class="gen" >
                    <p class="gen-black">add reference</p>
                </button>

                <div id="content1" style="display:none">

                    </br>
                    </br>

                    <input name="input2a" id="input2a" type="text" placeholder="firstname" />
                    <input name="input2b" id="input2b" type="text" placeholder="lastname" />
                    <input name="input2c" id="input2c" type="text" placeholder="email" />
                    <input name="input2d" id="input2d" type="text" placeholder="cell-number" />
                    </br>
                    <button id="add2" type="button" class="gen" >
                        <p class="gen-black">add reference</p>
                    </button>
                    <button id="remove1" type="button" class="gen" >
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content2" style="display:none">

                    </br>
                    </br>

                    <input name="input3a" id="input3a" type="text" placeholder="firstname" />
                    <input name="input3b" id="input3b" type="text" placeholder="lastname" />
                    <input name="input3c" id="input3c" type="text" placeholder="email" />
                    <input name="input3d" id="input3d" type="text" placeholder="cell-number" />
                    </br>
                    <button id="add3" type="button" class="gen" >
                        <p class="gen-black">add reference</p>
                    </button>
                    <button id="remove2" type="button" class="gen" >
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content3" style="display:none">

                    </br>
                    </br>

                    <input name="input4a" id="input4a" type="text" placeholder="firstname" />
                    <input name="input4b" id="input4b" type="text" placeholder="lastname" />
                    <input name="input4c" id="input4c" type="text" placeholder="email" />
                    <input name="input4d" id="input4d" type="text" placeholder="cell-number" />
                    </br>
                    <button id="add4" type="button" class="gen" >
                        <p class="gen-black">add reference</p>
                    </button>
                    <button id="remove3" type="button" class="gen" >
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content4" style="display:none">

                    </br>
                    </br>

                    <input name="input5a" id="input5a" type="text" placeholder="firstname" />
                    <input name="input5b" id="input5b" type="text" placeholder="lastname" />
                    <input name="input5c" id="input5c" type="text" placeholder="email" />
                    <input name="input5d" id="input5d" type="text" placeholder="cell-number" />
                    </br>
                    <button id="add5" type="button" class="gen" >
                        <p class="gen-black">add reference</p>
                    </button>
                    <button id="remove4" type="button" class="gen" >
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content5" style="display:none">

                    </br>
                    </br>

                    <input name="input6a" id="input6a" type="text" placeholder="firstname" />
                    <input name="input6b" id="input6b" type="text" placeholder="lastname" />
                    <input name="input6c" id="input6c" type="text" placeholder="email" />
                    <input name="input6d" id="input6d" type="text" placeholder="cell-number" />
                    </br>
                    <button id="add6" type="button" class="gen" >
                        <p class="gen-black">add reference</p>
                    </button>
                    <button id="remove5" type="button" class="gen" >
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content6" style="display:none">

                    </br>
                    </br>

                    <input name="input7a" id="input7a" type="text" placeholder="firstname" />
                    <input name="input7b" id="input7b" type="text" placeholder="lastname" />
                    <input name="input7c" id="input7c" type="text" placeholder="email" />
                    <input name="input7d" id="input7d" type="text" placeholder="cell-number" />
                    </br>
                    <button id="add7" type="button" class="gen" >
                        <p class="gen-black">add reference</p>
                    </button>
                    <button id="remove6" type="button" class="gen" >
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content7" style="display:none">

                    </br>
                    </br>

                    <input name="input8a" id="input8a" type="text" placeholder="firstname" />
                    <input name="input8b" id="input8b" type="text" placeholder="lastname" />
                    <input name="input8c" id="input8c" type="text" placeholder="email" />
                    <input name="input8d" id="input8d" type="text" placeholder="cell-number" />
                    </br>
                    <button id="add8" type="button" class="gen" >
                        <p class="gen-black">add reference</p>
                    </button>
                    <button id="remove7" type="button" class="gen" >
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content8" style="display:none">

                    </br>
                    </br>

                    <input name="input9a" id="input9a" type="text" placeholder="firstname" />
                    <input name="input9b" id="input9b" type="text" placeholder="lastname" />
                    <input name="input9c" id="input9c" type="text" placeholder="email" />
                    <input name="input9d" id="input9d" type="text" placeholder="cell-number" />
                    </br>
                    <button id="add9" type="button" class="gen" >
                        <p class="gen-black">add reference</p>
                    </button>
                    <button id="remove8" type="button" class="gen" >
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content9" style="display:none">

                    </br>
                    </br>

                    <input name="input10a" id="input10a" type="text" placeholder="firstname" />
                    <input name="input10b" id="input10b" type="text" placeholder="lastname" />
                    <input name="input10c" id="input10c" type="text" placeholder="email" />
                    <input name="input10d" id="input10d" type="text" placeholder="cell-number" />
                    </br>
                    <button id="remove9" type="button" class="gen" >
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                <div id="content10" style="display:none">

                    </br>
                    </br>

                    <input name="input11a" id="input11a" type="text" placeholder="firstname" />
                    <input name="input11b" id="input11b" type="text" placeholder="lastname" />
                    <input name="input11c" id="input11c" type="text" placeholder="email" />
                    <input name="input11d" id="input11d" type="text" placeholder="cell-number" />
                    </br>
                    <button id="remove9" type="button" class="gen" >
                        <p class="gen-black">remove</p>
                    </button>

                </div>

                </br>
                </br>
                </br>
                </br>
                </br>
                </br>

                <a class="clean" href="languages.php">
                    <button class="gen1" type="button" >
                        <p class="body">Previous</p>
                    </button>
                </a>

                <a class="clean" href="select template.php">
                    <button class="gen1" type="submit" name="submit" >
                        <p class="body">Finish</p>
                    </button>
                </a>

                </br>
                </br>
                </br>

                <p class="gen-black">8/8</p>

                </br>
                </br>

            </div>

        </form>

    </center>

    <?php require("main footer.php") ?>

</body>

</html>


