/*
function showEditor() {

    // alert("showing");
    document.getElementById("editor").style.display = "table";


}

function hideEditor() {

    // alert("hiding");
    document.getElementById("editor").style.display = "none";


}
*/


$("document").ready(function(){


    $(".edit").click(function(){

        $("#editor").fadeToggle(200);

    });

    $("#closeEditor").click(function(){

        $("#editor").fadeToggle(200);
        //$(".desktop1").load("page%20editor.php" + " .content_desktop");

    });

    $(".edit2").click(function(){

        $("#editor").fadeToggle(200);

    });

    $("#add_content_1").click(function(){

        $("#editor").fadeToggle(200);

    });

    $("#add_product_1").click(function(){

        $("#editor").fadeToggle(200);

    });

    $("#add_content_2").click(function(){

        $("#editor").fadeToggle(200);

    });

    $("#add_product_2").click(function(){

        $("#editor").fadeToggle(200);

    });


});