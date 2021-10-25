$("document").ready(function () {

    $("#add1").click(function () {
        $("#content1").show();
    });

    $("#add2").click(function () {
        if ($("#content1 input").val() != "") {
            $("#content2").show();
        }
    });

    $("#add3").click(function () {
        if ($("#content2 input").val() != "") {
            $("#content3").show();
        }
    });

    $("#add4").click(function () {
        if ($("#content3 input").val() != "") {
            $("#content4").show();
        }
    });

    $("#add5").click(function () {
        if ($("#content4 input").val() != "") {
            $("#content5").show();
        }
    });

    $("#add6").click(function () {
        if ($("#content5 input").val() != "") {
            $("#content6").show();
        }
    });

    $("#add7").click(function () {
        if ($("#content6 input").val() != "") {
            $("#content7").show();
        }
    });

    $("#add8").click(function () {
        if ($("#content7 input").val() != "") {
            $("#content8").show();
        }
    });

    $("#add9").click(function () {
        if ($("#content8 input").val() != "") {
            $("#content9").show();
        }
    });

    $("#add10").click(function () {
        if ($("#content9 input").val() != "") {
            $("#content10").show();
        }
    });


    $("#remove1").click(function () {
        $("#content1").hide();
        $("#content1 input").val("");
    });

    $("#remove2").click(function () {
        $("#content2").hide();
        $("#content2 input").val("");
    });

    $("#remove3").click(function () {
        $("#content3").hide();
        $("#content3 input").val("");
    });

    $("#remove4").click(function () {
        $("#content4").hide();
        $("#content4 input").val("");
    });

    $("#remove5").click(function () {
        $("#content5").hide();
        $("#content5 input").val("");
    });

    $("#remove6").click(function () {
        $("#content6").hide();
        $("#content6 input").val("");
    });

    $("#remove7").click(function () {
        $("#content7").hide();
        $("#content7 input").val("");
    });

    $("#remove8").click(function () {
        $("#content8").hide();
        $("#content8 input").val("");
    });

    $("#remove9").click(function () {
        $("#content9").hide();
        $("#content9 input").val("");
    });

    $("#remove10").click(function () {
        $("#content10").hide();
        $("#content10 input").val("");
    });

    $("#range1").click(function () {

        $("#rangeVal").text($("#range1").val());

    });

});