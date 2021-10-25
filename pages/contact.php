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
    
  <div class="container_form">


<h1 class="header">Contact</h1>

</br>
</br>

<img src="../icon packs/126466-multimedia-collection/png/envelope.png" width="250" height="250">

</br>
</br>
</br>
</br>

<h3 class='send_message_desktop'>First Name</h3>
<input class='send_message_desktop' required />

</br>
</br>
<h3 class='send_message_desktop'>Last Name</h3>
<input class='send_message_desktop' required />

</br>
</br>
<h3 class='send_message_desktop'>Email</h3>
<input class='send_message_desktop' required />

</br>
</br>
<h3 class='send_message_desktop'>Cell Number</h3>
<input class='send_message_desktop' required />

</br>
</br>
<h3 class='send_message_desktop'>Your Message</h3>
<textarea style="border-color: teal;padding:10;height:300;" class='send_message_desktop' required></textarea>

</br>
</br>
</br>
<button class='gen1'><p>Send</p></button>
</br>

</div>


<?php require("main footer.php") ?>

  </center>

</body>

</html>