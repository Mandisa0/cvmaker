<?php


function fetchInDB($conn,$table, $column, $where = "#")
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $column=filter_var($column,FILTER_SANITIZE_STRING);
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

                $value=$data[$column];

            mysqli_stmt_close($stmt);
        }

        return $value;

}
