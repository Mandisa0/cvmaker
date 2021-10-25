<?php

session_start();

require("../vendor/autoload.php");

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('defaultFont', 'Helvetica');
$dompdf = new Dompdf($options);

$options = $dompdf->getOptions();
$options->setDefaultFont('Helvetica');

// instantiate and use the dompdf class


$dompdf->loadHtml("<html>

<head>



    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/phantom.css\" />

    <script type=\"text/javascript\" src=\"../javascript/jquery-3.6.0.js\"></script>
    <script type=\"text/javascript\" src=\"../javascript/ui.js\">
    </script>

<style>


h1{

    text-align: left;
    
    font-size: 13;
    
    text-decoration:underline;

}

h2{

text-align: left;

font-size: 10;

}

h3{

    text-align: left;
    
    font-size: 8;
    
}

p.gen_black{

text-align: left;

font-size: 8;

}

hr{

width:90%;
margin:0;

}

table{

    height:750;

}

td{

    vertical-align: top;
   
}

div{

    vertical-align: top; 

}

</style>

</head>

<body>

 

<table border='1'  >

<tr >

<td width='140' >

<div style='margin-left:5;'>

<h1>Personal details</h1>

<h2>Firstname</h2>
<p class='gen_black'>
    " .$_SESSION['personal_details']['firstname'] . "
</p>


<h2>Lastname</h2>
<p class='gen_black'>
    " .$_SESSION['personal_details']['lastname'] . "
</p>


<h2>Email</h2>
<p class='gen_black'>
    " .$_SESSION['personal_details']['email'] . "
</p>


<h2>Phone</h2>
<p class='gen_black'>
    " .$_SESSION['personal_details']['phone_number'] . "
</p>

</div>

<br>


<!---------------------------------------------------------------------->

<div style='margin-left:5;'>

<h1>Interests</h1>

<p  class='gen_black'>
    " .$_SESSION['interests']['input1'] . "
</p>

<p  class='gen_black'>
    " .$_SESSION['interests']['input2'] . "
</p>

<p  class='gen_black'>
    " .$_SESSION['interests']['input3'] . "
</p>


<p  class='gen_black'>
    " .$_SESSION['interests']['input4'] . "
</p>

<p  class='gen_black'>
    " .$_SESSION['interests']['input5'] . "
</p>

<p  class='gen_black'>
    " .$_SESSION['interests']['input6'] . "
</p>




<p  class='gen_black'>
    " .$_SESSION['interests']['input7'] . "
</p>

<p  class='gen_black'>
    " .$_SESSION['interests']['input8'] . "
</p>

<p  class='gen_black'>
    " .$_SESSION['interests']['input9'] . "
</p>




<p  class='gen_black'>
    " .$_SESSION['interests']['input10'] . "
</p>

<p  class='gen_black'>
    " .$_SESSION['interests']['input11'] . "
</p>

</div>

<br>

<div style='margin-left:5;'>

<h1>Languages</h1>

    <p  class='gen_black'>
        " .$_SESSION['languages']['input1'] . "
    </p>

    <p  class='gen_black'>
        " .$_SESSION['languages']['input2'] . "
    </p>

    <p  class='gen_black'>
        " .$_SESSION['languages']['input3'] . "
    </p>

    <br>

    <p  class='gen_black'>
        " .$_SESSION['languages']['input4'] . "
    </p>

    <p  class='gen_black'>
        " .$_SESSION['languages']['input5'] . "
    </p>

    <p  class='gen_black'>
        " .$_SESSION['languages']['input6'] . "
    </p>

    <br>

    <p  class='gen_black'>
        " .$_SESSION['languages']['input7'] . "
    </p>

    <p  class='gen_black'>
        " .$_SESSION['languages']['input8'] . "
    </p>

    <p  class='gen_black'>
        " .$_SESSION['languages']['input9'] . "
    </p>

    <br>

    <p  class='gen_black'>
        " .$_SESSION['languages']['input10'] . "
    </p>

    <p  class='gen_black'>
        " .$_SESSION['languages']['input11'] . "
    </p>

    </div>

</td>

<td width='370' >

<div style='margin-left:10;display:inline-block;width:100;'>

<h1>Education</h1>

<p class='gen_black'>
    Highest grade passed: " .$_SESSION['education']['highest_grade_passed'] . "
</p>

<p class='gen_black'>
    " .$_SESSION['education']['institution_name'] . "
</p>

<p class='gen_black'>
    " .$_SESSION['education']['year'] . "
</p>


<h3>Subjects:</h3>

<p style='margin-top:-3' class='gen_black'>
    " .$_SESSION['education']['input1'] . "
</p>

<p style='margin-top:-3' class='gen_black'>
    " .$_SESSION['education']['input2'] . "
</p>

<p style='margin-top:-3' class='gen_black'>
    " .$_SESSION['education']['input3'] . "
</p>

<p style='margin-top:-3' class='gen_black'>
    " .$_SESSION['education']['input4'] . "
</p>

<p style='margin-top:-3' class='gen_black'>
    " .$_SESSION['education']['input5'] . "
</p>

<p style='margin-top:-3' class='gen_black'>
    " .$_SESSION['education']['input6'] . "
</p>



<p style='margin-top:-3' class='gen_black'>
    " .$_SESSION['education']['input7'] . "
</p>

<p style='margin-top:-3' class='gen_black'>
    " .$_SESSION['education']['input8'] . "
</p>

<p style='margin-top:-3' class='gen_black'>
    " .$_SESSION['education']['input9'] . "
</p>

<br>

<p style='margin-top:-3' class='gen_black'>
    " .$_SESSION['education']['input10'] . "
</p>

<p style='margin-top:-3' class='gen_black'>
    " .$_SESSION['education']['input11'] . "
</p>

</div>


<div style='display:inline-block;margin-left:80;'>

<h1>Qualifications</h1>

<p class='gen_black'>
    " .$_SESSION['qualifications']['input1a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input1b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input1c'] . "
</p>
<p class='gen_black'style='margin-bottom: 20;'>
    " .$_SESSION['qualifications']['input1d'] . "
</p>
 

<p class='gen_black'>
    " .$_SESSION['qualifications']['input2a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input2b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input2c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['qualifications']['input2d'] . "
</p>



<p class='gen_black'>
    " .$_SESSION['qualifications']['input3a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input3b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input3c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['qualifications']['input3d'] . "
</p>



<p class='gen_black'>
    " .$_SESSION['qualifications']['input4a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input4b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input4c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['qualifications']['input4d'] . "
</p>



<p class='gen_black'>
    " .$_SESSION['qualifications']['input5a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input5b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input5c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['qualifications']['input5d'] . "
</p>



<p class='gen_black'>
    " .$_SESSION['qualifications']['input6a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input6b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input6c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['qualifications']['input6d'] . "
</p>



<p class='gen_black'>
    " .$_SESSION['qualifications']['input7a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input7b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input7c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['qualifications']['input7d'] . "
</p>



<p class='gen_black'>
    " .$_SESSION['qualifications']['input8a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input8b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input8c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['qualifications']['input8d'] . "
</p>



<p class='gen_black'>
    " .$_SESSION['qualifications']['input9a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input9b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input9c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['qualifications']['input9d'] . "
</p>



<p class='gen_black'>
    " .$_SESSION['qualifications']['input10a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input10b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input10c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['qualifications']['input10d'] . "
</p>



<p class='gen_black'>
    " .$_SESSION['qualifications']['input11a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input11b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['qualifications']['input11c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['qualifications']['input11d'] . "
</p>

</div>

<br>

<div style='display:inline-block;margin-left:10;width:100;'>

<h1>Experience</h1>

<p class='gen_black'>
    " .$_SESSION['experience']['input1a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input1b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input1c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['experience']['input1d'] . "
</p>



<p class='gen_black'>
    " .$_SESSION['experience']['input2a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input2b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input2c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['experience']['input2d'] . "
</p>



<p class='gen_black'>
    " .$_SESSION['experience']['input3a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input3b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input3c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['experience']['input3d'] . "
</p>



<p class='gen_black'>
    " .$_SESSION['experience']['input4a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input4b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input4c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['experience']['input4d'] . "
</p>



<p class='gen_black'>
    " .$_SESSION['experience']['input5a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input5b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input5c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['experience']['input5d'] . "
</p>



<p class='gen_black'>
    " .$_SESSION['experience']['input6a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input6b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input6c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['experience']['input6d'] . "
</p>



<p class='gen_black'>
    " .$_SESSION['experience']['input7a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input7b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input7c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['experience']['input7d'] . "
</p>



<p class='gen_black'>
    " .$_SESSION['experience']['input8a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input8b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input8c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['experience']['input8d'] . "
</p>


<p class='gen_black'>
    " .$_SESSION['experience']['input9a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input9b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input9c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['experience']['input9d'] . "
</p>


<p class='gen_black'>
    " .$_SESSION['experience']['input10a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input10b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input10c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['experience']['input10d'] . "
</p>

<p class='gen_black'>
    " .$_SESSION['experience']['input11a'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input11b'] . "
</p>
<p class='gen_black'>
    " .$_SESSION['experience']['input11c'] . "
</p>
<p class='gen_black' style='margin-bottom: 20;'>
    " .$_SESSION['experience']['input11d'] . "
</p>

</div>

<div style='margin-left:80;display:inline-block;'>

<h1>Skills</h1>

<p  class='gen_black'>
    " .$_SESSION['skills']['input1'] . "
</p>

<p  class='gen_black'>
    " .$_SESSION['skills']['input2'] . "
</p>

<p  class='gen_black'>
    " .$_SESSION['skills']['input3'] . "
</p>


<p  class='gen_black'>
    " .$_SESSION['skills']['input4'] . "
</p>

<p  class='gen_black'>
    " .$_SESSION['skills']['input5'] . "
</p>

<p  class='gen_black'>
    " .$_SESSION['skills']['input6'] . "
</p>


<p  class='gen_black'>
    " .$_SESSION['skills']['input7'] . "
</p>

<p  class='gen_black'>
    " .$_SESSION['skills']['input8'] . "
</p>

<p  class='gen_black'>
    " .$_SESSION['skills']['input9'] . "
</p>


<p  class='gen_black'>
    " .$_SESSION['skills']['input10'] . "
</p>

<p  class='gen_black'>
    " .$_SESSION['skills']['input11'] . "
</p>

</div>


<br>

<div style='display:inline-block;margin-left:10;'>

<h1>References</h1>

<div style='display:inline-block;margin-top:0;width:120;'>
        <p class='gen_black'>
            " .$_SESSION['references']['input1a'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input1b'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input1c'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input1d'] . "
        </p>
    </div>


    <div style='display:inline-block;width:120;'>
        <p class='gen_black'>
            " .$_SESSION['references']['input2a'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input2b'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input2c'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input2d'] . "
        </p>
    </div>

    <div style='display:inline-block;width:120;'>
        <p class='gen_black'>
            " .$_SESSION['references']['input3a'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input3b'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input3c'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input3d'] . "
        </p>
    </div>

    <br>

    <div style='display:inline-block;margin-top:0;width:120;'>
        <p class='gen_black'>
            " .$_SESSION['references']['input4a'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input4b'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input4c'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input4d'] . "
        </p>
    </div <div style='display:inline-block;width:120;'>
    <p class='gen_black'>
        " .$_SESSION['references']['input5a'] . "
    </p>
    <p class='gen_black'>
        " .$_SESSION['references']['input5b'] . "
    </p>
    <p class='gen_black'>
        " .$_SESSION['references']['input5c'] . "
    </p>
    <p class='gen_black'>
        " .$_SESSION['references']['input5d'] . "
    </p>
    </div <div style='display:inline-block;width:120;'>
    <p class='gen_black'>
        " .$_SESSION['references']['input6a'] . "
    </p>
    <p class='gen_black'>
        " .$_SESSION['references']['input6b'] . "
    </p>
    <p class='gen_black'>
        " .$_SESSION['references']['input6c'] . "
    </p>
    <p class='gen_black'>
        " .$_SESSION['references']['input6d'] . "
    </p>
    </div>

    </br>

    <div style='display:inline-block;margin-top:0;width:120;'>
        <p class='gen_black'>
            " .$_SESSION['references']['input7a'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input7b'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input7c'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input7d'] . "
        </p>
    </div>


    <div style='display:inline-block;width:120;'>
        <p class='gen_black'>
            " .$_SESSION['references']['input8a'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input8b'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input8c'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input8d'] . "
        </p>
    </div>


    <div style='display:inline-block;width:120;'>
        <p class='gen_black'>
            " .$_SESSION['references']['input9a'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input9b'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input9c'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input9d'] . "
        </p>
    </div>

    <br>

    <div style='display:inline-block;margin-top:0;width:120;'>
        <p class='gen_black'>
            " .$_SESSION['references']['input10a'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input10b'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input10c'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input10d'] . "
        </p>
    </div>

    <div style='display:inline-block;width:120;'>
        <p class='gen_black'>
            " .$_SESSION['references']['input11a'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input11b'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input11c'] . "
        </p>
        <p class='gen_black'>
            " .$_SESSION['references']['input11d'] . "
        </p>
    </div>

</div>

</td>

</tr>

</table>

     
               
</body>

</html>");

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("Curriculum Vitae.pdf");
