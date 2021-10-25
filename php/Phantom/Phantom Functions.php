<?php

$mytext = "we are going to skip a line here and we will skip another one here. did it work?";

//NL2BR();

function addLineBreaks($text, $pos)
{

    $oldPos = $pos;
    $charCounter = 0;
    $newStr = "";

    for ($i = 0; $i < strlen($text); $i++) {

        if ($charCounter == $pos) {


            if ($text[$i] != ' ') {

                $newStr .= $text[$i];
                $pos++;
            } else {

                $newStr .= $text[$i];
                $newStr .= "\n";
                $charCounter = 0;
                $pos = $oldPos;
            }
        } else {

            $newStr .= $text[$i];
        }

        $charCounter++;
    }

    print($newStr);
}

function fetchInDB($conn, $table, $column, $where = "#")
{

    $table = filter_var($table, FILTER_SANITIZE_STRING);
    $column = filter_var($column, FILTER_SANITIZE_STRING);
    // $where = filter_var($where, FILTER_SANITIZE_STRING);

    $stmt = mysqli_stmt_init($conn);
    $query = "SELECT * FROM $table;";

    if ($where != "#") {

        $query = "SELECT * FROM $table WHERE $where;";
    }

    if (!mysqli_stmt_prepare($stmt, $query)) {

        print("<p style='margin:0;color:red'>could not prepare statement</p>");
        print("<p style='margin:0;color:blue'>debug: ");
        print("\$dbObj -> selectPrint()</p>");
    } else {

        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        $data = mysqli_fetch_assoc($result);

        $value = $data[$column];

        mysqli_stmt_close($stmt);
    }

    return $value;
}

function displayPageNav($conn,$table,$contentPerPage, $pagename,$navContainerClass,$buttonContainerClass,$buttonClass,$activeClass,$extraVar,$where="#",$onFailRedir="")
{

    //DbConn($conn);

    $query = "SELECT COUNT(`ID`) AS contentCount FROM `$table`;";


    if( $where!="#" ){

        $query = "SELECT COUNT(`ID`) AS contentCount FROM `$table` WHERE $where;";

    }

    $stmt = mysqli_stmt_init($conn);

    if (!$stmt) {

        print("displayArtistsInTable could not prepare stmt<br>");
    } else {

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("displayPageNav could not prepare stmt<br>");
        } else {

            if (!mysqli_stmt_execute($stmt)) {

                print("displayPageNav could not execute stmt<br>");
            } else {

                $result = mysqli_stmt_get_result($stmt);


                print("<center>\n\n");

                $tdCount = 0;

                $data = mysqli_fetch_assoc($result);

                if($data['contentCount']==0){

                    header("Location: $onFailRedir");
                    exit();

                }

                $content = $data['contentCount'];
                $pages = $content / $contentPerPage;

                if ($content % $contentPerPage > 0) {
                    $pages += 1;
                }

                $currentPage = filter_var($_GET['pagenumber'], FILTER_SANITIZE_NUMBER_INT);

                if ($currentPage > $pages) {

                    header("Location: $pagename?pagenumber=1$extraVar");
                    exit();
                }

                print("<div class='$navContainerClass'>");

                if ($currentPage != 1) {

                    $prevPage = $currentPage - 1;

                    print("<div class='$buttonContainerClass'>");
                    print("<a href='$pagename?pagenumber=$prevPage$extraVar' >");
                    print("<button class='$buttonClass'> < </button>");
                    print("</a>");
                    print("</div>");
                }

                for ($i = 1; $i <= $pages; $i++) {

                    if ($i == $currentPage) {

                        print("<div class='$buttonContainerClass'>");
                        print("<button class='$activeClass'> $i </button>");
                        print("</div>");
                    } else {

                        print("<div class='$buttonContainerClass'>");
                        print("<a href='$pagename?pagenumber=$i$extraVar' >");
                        print("<button class='$buttonClass' > $i </button>");
                        print("</a>");
                        print("</div>");
                    }
                }

                //print("<p style='color:white'>".  ."</p>");

                if ($currentPage != intval($pages)) {

                    $nextPage = $currentPage + 1;

                    print("<div class='pagenavHolder'>");
                    print("<a href='$pagename?pagenumber=$nextPage$extraVar' >");
                    print("<button class='$buttonClass'> > </button>");
                    print("</a>");
                    print("</div>");
                }

                print("</div>");


                mysqli_stmt_close($stmt);
            }
        }
    }


}

function returnRandomId($conn,$table,$idColumn,$number){


    $query = "SELECT `$idColumn` FROM `$table`;";

    $ids=array();

    $stmt = mysqli_stmt_init($conn);

    $indexCount=0;


    if (!$stmt) {

        print("returnRandomId could not prepare stmt<br>");
    } else {

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("returnRandomId could not prepare stmt<br>");
        } else {

            if (!mysqli_stmt_execute($stmt)) {

                print("returnRandomId could not execute stmt<br>");
            } else {

                $result = mysqli_stmt_get_result($stmt);

                while( $data = mysqli_fetch_assoc($result) ){

                    array_push($ids,$data[$idColumn]);

                }

            }
        
        }

    }

    $randomValues=array_rand($ids,$number);

    return $ids[$randomValues[0]];

}

