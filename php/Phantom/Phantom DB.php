<?php

//$conn = mysqli_connect("localhost", "root", "", "shop builder");

class dbObj
{

    private $flexyDbConn;
    private $objPrimaryKey;


    function __construct($link)
    {

        $this->flexyDbConn = $link;
    }

    function closeConn($link)
    {
        mysqli_close($link);
    }

    function closeStmt($link)
    {

        mysqli_stmt_close($link);
    }

    function insert($table, $column, $value, $type)
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $column = filter_var($column, FILTER_SANITIZE_STRING);
        $value = filter_var($value, FILTER_SANITIZE_STRING);
        $type = filter_var($type, FILTER_SANITIZE_STRING);

        $stmt = mysqli_stmt_init($this->flexyDbConn);
        $query = "INSERT INTO `$table` (`$column`) VALUES (?);";



        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("<p style='margin:0;color:red'>could not prepare statement</p>");
            print("<p style='margin:0;color:blue'>debug: ");
            print("\$dbObj -> insert()</p>");
        } else {

            mysqli_stmt_bind_param($stmt, "$type", $value);
            mysqli_stmt_execute($stmt);
            $this->objPrimaryKey = mysqli_insert_id($this->flexyDbConn);
        }
    }

    function insertEP($table, $eColumn, $eValue, $pColumn, $pValue)
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $eColumn = filter_var($eColumn, FILTER_SANITIZE_STRING);
        $eValue = filter_var($eValue, FILTER_SANITIZE_STRING);
        $pColumn = filter_var($pColumn, FILTER_SANITIZE_STRING);
        $pValue = filter_var($pValue, FILTER_SANITIZE_STRING);

        $stmt = mysqli_stmt_init($this->flexyDbConn);

        $query = "INSERT INTO `$table` (`$eColumn`,`$pColumn`) VALUES (?,?);";

        $pValue = password_hash($pValue, PASSWORD_BCRYPT);

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("<p style='margin:0;color:red'>could not prepare statement</p>");
            print("<p style='margin:0;color:blue'>debug: ");
            print("\$dbObj -> insertEP()</p>");
        } else {

            mysqli_stmt_bind_param($stmt, "ss", $eValue, $pValue);
            mysqli_stmt_execute($stmt);
            $this->objPrimaryKey = mysqli_insert_id($this->flexyDbConn);
        }
    }

    function updateEP($table, $eColumn, $eValue, $pColumn, $pValue)
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $eColumn = filter_var($eColumn, FILTER_SANITIZE_STRING);
        $eValue = filter_var($eValue, FILTER_SANITIZE_STRING);
        $pColumn = filter_var($pColumn, FILTER_SANITIZE_STRING);
        $pValue = filter_var($pValue, FILTER_SANITIZE_STRING);

        $stmt = mysqli_stmt_init($this->flexyDbConn);

        $query = "UPDATE `$table` SET `$pColumn`=? WHERE `email`=?;";

        $pValue = password_hash($pValue, PASSWORD_BCRYPT);

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("<p style='margin:0;color:red'>could not prepare statement</p>");
            print("<p style='margin:0;color:blue'>debug: ");
            print("\$dbObj -> insertEP()</p>");

        } else {

            mysqli_stmt_bind_param($stmt, "ss", $pValue, $eValue);
            mysqli_stmt_execute($stmt);
          
        }
    }


    function insertMore($table, $column, $value, $type, $primKeyColumn, $primaryKeyType = "i")
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $column = filter_var($column, FILTER_SANITIZE_STRING);
        $value = filter_var($value, FILTER_SANITIZE_STRING);
        $primKeyColumn = filter_var($primKeyColumn, FILTER_SANITIZE_STRING);
        $type = filter_var($type, FILTER_SANITIZE_STRING);
        $primaryKeyType = filter_var($primaryKeyType, FILTER_SANITIZE_STRING);

        $stmt = mysqli_stmt_init($this->flexyDbConn);
        $query = "UPDATE `$table` SET `$column`=? WHERE $primKeyColumn=?;";

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("<p style='margin:0;color:red'>could not prepare statement</p>");
            print("<p style='margin:0;color:blue'>debug: ");
            print("\$dbObj -> insert()</p>");
        } else {

            mysqli_stmt_bind_param($stmt, "$type$primaryKeyType", $value, $this->objPrimaryKey);
            mysqli_stmt_execute($stmt);
        }
    }

    function verEP($table, $eColumn, $eValue, $pColumn, $pValue)
    {

        $value = false;

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $eColumn = filter_var($eColumn, FILTER_SANITIZE_STRING);
        $eValue = filter_var($eValue, FILTER_SANITIZE_STRING);
        $pColumn = filter_var($pColumn, FILTER_SANITIZE_STRING);
        $pValue = filter_var($pValue, FILTER_SANITIZE_STRING);

        $stmt = mysqli_stmt_init($this->flexyDbConn);
        $query = "SELECT `$eColumn`,`$pColumn` FROM $table WHERE `$eColumn`=?;";

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("<p style='margin:0;color:red'>could not prepare statement</p>");
            print("<p style='margin:0;color:blue'>debug: ");
            print("\$dbObj -> verEP()</p>");
        } else {

            mysqli_stmt_bind_param($stmt, "s", $eValue);

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            $data = mysqli_fetch_assoc($result);

            if ($data[$eColumn] == $eValue && password_verify($pValue, $data[$pColumn]) == true) {

                $value = true;
            } else {

                $value = false;
            }

            mysqli_stmt_close($stmt);

            return $value;
        }
    }

    function update($table, $column, $value, $where, $type)
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $column = filter_var($column, FILTER_SANITIZE_STRING);
        $value = filter_var($value, FILTER_SANITIZE_STRING);

        $where = mysqli_escape_string($this->flexyDbConn, $where);

        $stmt = mysqli_stmt_init($this->flexyDbConn);
        $query = "UPDATE `$table` SET `$column`=? WHERE $where;";

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("<p style='margin:0;color:red'>could not prepare statement</p>");
            print("<p style='margin:0;color:blue'>debug: ");
            print("\$dbObj -> update()</p>");
        } else {

            mysqli_stmt_bind_param($stmt, "$type", $value);
            mysqli_stmt_execute($stmt);
        }
    }

    function delData($table, $where)
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);

        $stmt = mysqli_stmt_init($this->flexyDbConn);
        $query = "DELETE FROM `$table` WHERE $where;";

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("<p style='margin:0;color:red'>could not prepare statement</p>");
            print("<p style='margin:0;color:blue'>debug: ");
            print("\$dbObj -> delData()</p>");
        } else {

            mysqli_stmt_execute($stmt);
        }
    }

    function getID($table, $column, $where)
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $column = filter_var($column, FILTER_SANITIZE_STRING);
        $where = mysqli_escape_string($this->flexyDbConn, $where);

        $stmt = mysqli_stmt_init($this->flexyDbConn);
        $query = "SELECT * FROM $table WHERE $where;";

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("<p style='margin:0;color:red'>could not prepare statement</p>");
            print("<p style='margin:0;color:blue'>debug: ");
            print("\$dbObj -> getID()</p>");
        } else {

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            $data = mysqli_fetch_assoc($result);

            $value = $data[$column];

            mysqli_stmt_close($stmt);

            return $value;
        }
    }

    function selectPrint1Null($table, $column, $prefix, $suffix, $alink = "#", $where = "#")
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $column = filter_var($column, FILTER_SANITIZE_STRING);
        $alink = filter_var($alink, FILTER_SANITIZE_STRING);
        $where = mysqli_escape_string($this->flexyDbConn, $where);

        $stmt = mysqli_stmt_init($this->flexyDbConn);
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

            while ($data = mysqli_fetch_assoc($result)) {

                if ($alink != "#") {

                    print("<a href='$alink?getVar=$data[$column]'>");
                }

                if ($data[$column] != '')
                    print("$prefix$data[$column]$suffix");


                if ($alink != "#") {

                    print("</a>");
                }
            }

            mysqli_stmt_close($stmt);
        }
    }


    function selectPrint1($table, $column, $prefix, $suffix, $alink = "#", $where = "#")
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $column = filter_var($column, FILTER_SANITIZE_STRING);
        $alink = filter_var($alink, FILTER_SANITIZE_STRING);
        $where = mysqli_escape_string($this->flexyDbConn, $where);

        $stmt = mysqli_stmt_init($this->flexyDbConn);
        $query = "SELECT * FROM $table;";

        if ($where != "#") {

            $query = "SELECT * FROM $table WHERE $where;";
        }

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("<p style='margin:0;color:red'>could not prepare statement</p>");
            print("<p style='margin:0;color:blue'>debug: ");
            print("\$dbObj -> selectPrint1()</p>");
        } else {

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            while ($data = mysqli_fetch_assoc($result)) {

                if ($alink != "#") {

                    print("<a href='$alink?getVar=$data[$column]'>");
                }


                print("$prefix$data[$column]$suffix");


                if ($alink != "#") {

                    print("</a>");
                }
            }

            mysqli_stmt_close($stmt);
        }
    }

    function selectPrint2($table, $column, $prefix, $suffix, $alink = "#", $column2, $prefix2, $suffix2, $alink2 = "#", $where = "#")
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $column = filter_var($column, FILTER_SANITIZE_STRING);
        $alink = filter_var($alink, FILTER_SANITIZE_STRING);
        $column2 = filter_var($column2, FILTER_SANITIZE_STRING);
        $alink2 = filter_var($alink2, FILTER_SANITIZE_STRING);
        $where = mysqli_escape_string($this->flexyDbConn, $where);

        $stmt = mysqli_stmt_init($this->flexyDbConn);
        $query = "SELECT * FROM $table;";

        if ($where != "#") {

            $query = "SELECT * FROM $table WHERE $where;";
        }

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("<p style='margin:0;color:red'>could not prepare statement</p>");
            print("<p style='margin:0;color:blue'>debug: ");
            print("\$dbObj -> selectPrint2()</p>");
        } else {

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            while ($data = mysqli_fetch_assoc($result)) {

                if ($alink != "#") {

                    print("<a href='$alink?getVar=$data[$column]getVar2=$data[$column2]'>");
                }

                print("$prefix$data[$column]$suffix");


                if ($alink != "#") {

                    print("</a>");
                }

                if ($alink2 != "#") {

                    print("<a href='$alink2?getVar=$data[$column]&getVar2=$data[$column2]'>");
                }

                print("$prefix2$data[$column2]$suffix2");


                if ($alink2 != "#") {

                    print("</a>");
                }
            }

            mysqli_stmt_close($stmt);
        }
    }

    function selectPrint3($table, $column, $prefix, $suffix, $alink = "#", $column2, $prefix2, $suffix2, $alink2 = "#", $column3, $prefix3, $suffix3, $alink3 = "#", $where = "#")
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $column = filter_var($column, FILTER_SANITIZE_STRING);
        $alink = filter_var($alink, FILTER_SANITIZE_STRING);
        $column2 = filter_var($column2, FILTER_SANITIZE_STRING);
        $alink2 = filter_var($alink2, FILTER_SANITIZE_STRING);
        $column3 = filter_var($column3, FILTER_SANITIZE_STRING);
        $alink3 = filter_var($alink3, FILTER_SANITIZE_STRING);
        $where = mysqli_escape_string($this->flexyDbConn, $where);

        $stmt = mysqli_stmt_init($this->flexyDbConn);
        $query = "SELECT * FROM $table;";

        if ($where != "#") {

            $query = "SELECT * FROM $table WHERE $where;";
        }

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("<p style='margin:0;color:red'>could not prepare statement</p>");
            print("<p style='margin:0;color:blue'>debug: ");
            print("\$dbObj -> selectPrint3()</p>");
        } else {

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            while ($data = mysqli_fetch_assoc($result)) {

                if ($alink != "#") {

                    print("<a href='$alink?getVar=$data[$column]&getVar=$data[$column2]&getVar3=$data[$column3]'>");
                }

                print("$prefix$data[$column]$suffix");


                if ($alink != "#") {

                    print("</a>");
                }

                if ($alink2 != "#") {

                    print("<a href='$alink2?$data[$column]&getVar=$data[$column2]&getVar3=$data[$column3]'>");
                }

                print("$prefix2$data[$column2]$suffix2");


                if ($alink2 != "#") {

                    print("</a>");
                }

                if ($alink3 != "#") {

                    print("<a href='$alink3?$data[$column]&getVar=$data[$column2]&getVar3=$data[$column3]'>");
                }

                print("$prefix3$data[$column3]$suffix3");


                if ($alink3 != "#") {

                    print("</a>");
                }
            }

            mysqli_stmt_close($stmt);
        }
    }

    function selectPrint4($table, $column, $prefix, $suffix, $alink = "#", $column2, $prefix2, $suffix2, $alink2 = "#", $column3, $prefix3, $suffix3, $alink3 = "#", $column4, $prefix4, $suffix4, $alink4 = "#", $where = "#")
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $column = filter_var($column, FILTER_SANITIZE_STRING);
        $alink = filter_var($alink, FILTER_SANITIZE_STRING);
        $column2 = filter_var($column2, FILTER_SANITIZE_STRING);
        $alink2 = filter_var($alink2, FILTER_SANITIZE_STRING);
        $column3 = filter_var($column3, FILTER_SANITIZE_STRING);
        $alink3 = filter_var($alink3, FILTER_SANITIZE_STRING);
        $column4 = filter_var($column4, FILTER_SANITIZE_STRING);
        $alink4 = filter_var($alink4, FILTER_SANITIZE_STRING);
        $where = mysqli_escape_string($this->flexyDbConn, $where);

        $stmt = mysqli_stmt_init($this->flexyDbConn);
        $query = "SELECT * FROM $table;";

        if ($where != "#") {

            $query = "SELECT * FROM $table WHERE $where;";
        }

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("<p style='margin:0;color:red'>could not prepare statement</p>");
            print("<p style='margin:0;color:blue'>debug: ");
            print("\$dbObj -> selectPrint4()</p>");
        } else {

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            while ($data = mysqli_fetch_assoc($result)) {

                if ($alink != "#") {

                    print("<a href='$alink?$data[$column]&getVar=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]'>");
                }

                print("$prefix$data[$column]$suffix");


                if ($alink != "#") {

                    print("</a>");
                }

                if ($alink2 != "#") {

                    print("<a href='$alink2?$data[$column]&getVar=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]'>");
                }

                print("$prefix2$data[$column2]$suffix2");


                if ($alink2 != "#") {

                    print("</a>");
                }

                if ($alink3 != "#") {

                    print("<a href='$alink3?$data[$column]&getVar=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]'>");
                }

                print("$prefix3$data[$column3]$suffix3");


                if ($alink3 != "#") {

                    print("</a>");
                }

                if ($alink4 != "#") {

                    print("<a href='$alink4?$data[$column]&getVar=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]'>");
                }

                print("$prefix4$data[$column4]$suffix4");


                if ($alink4 != "#") {

                    print("</a>");
                }
            }

            mysqli_stmt_close($stmt);
        }
    }

    function selectPrint5($table, $column, $prefix, $suffix, $alink = "#", $column2, $prefix2, $suffix2, $alink2 = "#", $column3, $prefix3, $suffix3, $alink3 = "#", $column4, $prefix4, $suffix4, $alink4 = "#", $column5, $prefix5, $suffix5, $alink5 = "#", $where = "#")
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $column = filter_var($column, FILTER_SANITIZE_STRING);
        $alink = filter_var($alink, FILTER_SANITIZE_STRING);
        $column2 = filter_var($column2, FILTER_SANITIZE_STRING);
        $alink2 = filter_var($alink2, FILTER_SANITIZE_STRING);
        $column3 = filter_var($column3, FILTER_SANITIZE_STRING);
        $alink3 = filter_var($alink3, FILTER_SANITIZE_STRING);
        $column4 = filter_var($column4, FILTER_SANITIZE_STRING);
        $alink4 = filter_var($alink4, FILTER_SANITIZE_STRING);
        $column5 = filter_var($column5, FILTER_SANITIZE_STRING);
        $alink5 = filter_var($alink5, FILTER_SANITIZE_STRING);
        $where = mysqli_escape_string($this->flexyDbConn, $where);

        $stmt = mysqli_stmt_init($this->flexyDbConn);
        $query = "SELECT * FROM $table;";


        if ($where != "#") {

            $query = "SELECT * FROM $table WHERE $where;";
        }

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("<p style='margin:0;color:red'>could not prepare statement</p>");
            print("<p style='margin:0;color:blue'>debug: ");
            print("\$dbObj -> selectPrint5()</p>");
        } else {

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            while ($data = mysqli_fetch_assoc($result)) {

                if ($alink != "#") {

                    print("<a href='$alink?$data[$column]&getVar=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                print("$prefix$data[$column]$suffix");


                if ($alink != "#") {

                    print("</a>");
                }

                if ($alink2 != "#") {

                    print("<a href='$alink2?$data[$column]&getVar=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                print("$prefix2$data[$column2]$suffix2");


                if ($alink2 != "#") {

                    print("</a>");
                }

                if ($alink3 != "#") {

                    print("<a href='$alink3?$data[$column]&getVar=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                print("$prefix3$data[$column3]$suffix3");


                if ($alink3 != "#") {

                    print("</a>");
                }

                if ($alink4 != "#") {

                    print("<a href='$alink4?$data[$column]&getVar=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                print("$prefix4$data[$column4]$suffix4");


                if ($alink4 != "#") {

                    print("</a>");
                }

                if ($alink5 != "#") {

                    print("<a href='$alink5?$data[$column]&getVar=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                print("$prefix5$data[$column5]$suffix5");


                if ($alink5 != "#") {

                    print("</a>");
                }
            }

            mysqli_stmt_close($stmt);
        }
    }

    function selectPrint6($table, $column, $prefix, $suffix, $alink = "#", $column2, $prefix2, $suffix2, $alink2 = "#", $column3, $prefix3, $suffix3, $alink3 = "#", $column4, $prefix4, $suffix4, $alink4 = "#", $column5, $prefix5, $suffix5, $alink5 = "#", $column6, $prefix6, $suffix6, $alink6 = "#", $where = "#")
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $column = filter_var($column, FILTER_SANITIZE_STRING);
        $alink = filter_var($alink, FILTER_SANITIZE_STRING);
        $column2 = filter_var($column2, FILTER_SANITIZE_STRING);
        $alink2 = filter_var($alink2, FILTER_SANITIZE_STRING);
        $column3 = filter_var($column3, FILTER_SANITIZE_STRING);
        $alink3 = filter_var($alink3, FILTER_SANITIZE_STRING);
        $column4 = filter_var($column4, FILTER_SANITIZE_STRING);
        $alink4 = filter_var($alink4, FILTER_SANITIZE_STRING);
        $column5 = filter_var($column5, FILTER_SANITIZE_STRING);
        $alink5 = filter_var($alink5, FILTER_SANITIZE_STRING);
        $column6 = filter_var($column6, FILTER_SANITIZE_STRING);
        $alink6 = filter_var($alink6, FILTER_SANITIZE_STRING);
        $where = mysqli_escape_string($this->flexyDbConn, $where);

        $stmt = mysqli_stmt_init($this->flexyDbConn);
        $query = "SELECT * FROM $table;";


        if ($where != "#") {

            $query = "SELECT * FROM $table WHERE $where;";
        }

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("<p style='margin:0;color:red'>could not prepare statement</p>");
            print("<p style='margin:0;color:blue'>debug: ");
            print("\$dbObj -> selectPrint6()</p>");
        } else {

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            while ($data = mysqli_fetch_assoc($result)) {

                if ($alink != "#") {

                    print("<a href='$alink?$data[$column]&getVar=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                if ($data[$column] != '')
                    print("$prefix$data[$column]$suffix");


                if ($alink != "#") {

                    print("</a>");
                }

                if ($alink2 != "#") {

                    print("<a href='$alink2?$data[$column]&getVar=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                if ($data[$column2] != '')
                    print("$prefix2$data[$column2]$suffix2");


                if ($alink2 != "#") {

                    print("</a>");
                }

                if ($alink3 != "#") {

                    print("<a href='$alink3?$data[$column]&getVar=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                if ($data[$column3] != '')
                    print("$prefix3$data[$column3]$suffix3");


                if ($alink3 != "#") {

                    print("</a>");
                }

                if ($alink4 != "#") {

                    print("<a href='$alink4?$data[$column]&getVar=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                if ($data[$column4] != '')
                    print("$prefix4$data[$column4]$suffix4");


                if ($alink4 != "#") {

                    print("</a>");
                }

                if ($alink5 != "#") {

                    print("<a href='$alink5?$data[$column]&getVar=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                if ($data[$column5] != '')
                    print("$prefix5$data[$column5]$suffix5");


                if ($alink5 != "#") {

                    print("</a>");
                }

                if ($alink6 != "#") {

                    print("<a href='$alink6?$data[$column]&getVar=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]&getVar6=$data[$column6]'>");
                }

                if ($data[$column6] != '')
                    print("$prefix6$data[$column6]$suffix6");


                if ($alink6 != "#") {

                    print("</a>");
                }
            }

            mysqli_stmt_close($stmt);
        }
    }

    function selectPrint7($table, $column, $prefix, $suffix, $alink = "#", $column2, $prefix2, $suffix2, $alink2 = "#", $column3, $prefix3, $suffix3, $alink3 = "#", $column4, $prefix4, $suffix4, $alink4 = "#", $column5, $prefix5, $suffix5, $alink5 = "#", $column6, $prefix6, $suffix6, $alink6 = "#", $column7, $prefix7, $suffix7, $alink7 = "#", $where = "#")
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $column = filter_var($column, FILTER_SANITIZE_STRING);
        $alink = filter_var($alink, FILTER_SANITIZE_STRING);
        $column2 = filter_var($column2, FILTER_SANITIZE_STRING);
        $alink2 = filter_var($alink2, FILTER_SANITIZE_STRING);
        $column3 = filter_var($column3, FILTER_SANITIZE_STRING);
        $alink3 = filter_var($alink3, FILTER_SANITIZE_STRING);
        $column4 = filter_var($column4, FILTER_SANITIZE_STRING);
        $alink4 = filter_var($alink4, FILTER_SANITIZE_STRING);
        $column5 = filter_var($column5, FILTER_SANITIZE_STRING);
        $alink5 = filter_var($alink5, FILTER_SANITIZE_STRING);
        $column6 = filter_var($column6, FILTER_SANITIZE_STRING);
        $alink6 = filter_var($alink6, FILTER_SANITIZE_STRING);
        $column7 = filter_var($column7, FILTER_SANITIZE_STRING);
        $alink7 = filter_var($alink7, FILTER_SANITIZE_STRING);
        $where = mysqli_escape_string($this->flexyDbConn, $where);

        $stmt = mysqli_stmt_init($this->flexyDbConn);
        $query = "SELECT * FROM $table;";


        if ($where != "#") {

            $query = "SELECT * FROM $table WHERE $where;";
        }

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("<p style='margin:0;color:red'>could not prepare statement</p>");
            print("<p style='margin:0;color:blue'>debug: ");
            print("\$dbObj -> selectPrint7()</p>");
        } else {

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            while ($data = mysqli_fetch_assoc($result)) {

                if ($alink != "#") {

                    print("<a href='$alink?$data[$column]&getVar2=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                if ($data[$column] != '')
                    print("$prefix$data[$column]$suffix");


                if ($alink != "#") {

                    print("</a>");
                }

                if ($alink2 != "#") {

                    print("<a href='$alink2?getVar=$data[$column]&getVar2=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                if ($data[$column2] != '')
                    print("$prefix2$data[$column2]$suffix2\n");


                if ($alink2 != "#") {

                    print("</a>");
                }

                if ($alink3 != "#") {

                    print("<a href='$alink3?getVar=$data[$column]&getVar2=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                if ($data[$column3] != '')
                    print("$prefix3$data[$column3]$suffix3");


                if ($alink3 != "#") {

                    print("</a>");
                }

                if ($alink4 != "#") {

                    print("<a href='$alink4?getVar=$data[$column]&getVar2=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                if ($data[$column4] != '')
                    print("$prefix4$data[$column4]$suffix4");


                if ($alink4 != "#") {

                    print("</a>");
                }

                if ($alink5 != "#") {

                    print("<a href='$alink5?getVar=$data[$column]&getVar2=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                if ($data[$column5] != '')
                    print("$prefix5$data[$column5]$suffix5");


                if ($alink5 != "#") {

                    print("</a>");
                }

                if ($alink6 != "#") {

                    print("<a href='$alink6?getVar=$data[$column]&getVar2=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]&getVar6=$data[$column6]'>");
                }

                if ($data[$column6] != '')
                    print("$prefix6$data[$column6]$suffix6");


                if ($alink6 != "#") {

                    print("</a>");
                }



                if ($alink7 != "#") {

                    print("<a href='$alink7?getVar=$data[$column]&getVar2=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]&getVar6=$data[$column6]&getVar7=$data[$column7]'>");
                }

                if ($data[$column6] != '')
                    print("$prefix7$data[$column7]$suffix7");


                if ($alink7 != "#") {

                    print("</a>");
                }
            }

            mysqli_stmt_close($stmt);
        }
    }

    function selectPrint8($table, $column, $prefix, $suffix, $alink = "#", $column2, $prefix2, $suffix2, $alink2 = "#", $column3, $prefix3, $suffix3, $alink3 = "#", $column4, $prefix4, $suffix4, $alink4 = "#", $column5, $prefix5, $suffix5, $alink5 = "#", $column6, $prefix6, $suffix6, $alink6 = "#", $column7, $prefix7, $suffix7, $alink7 = "#", $column8, $prefix8, $suffix8, $alink8 = "#", $where = "#")
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $column = filter_var($column, FILTER_SANITIZE_STRING);
        $alink = filter_var($alink, FILTER_SANITIZE_STRING);
        $column2 = filter_var($column2, FILTER_SANITIZE_STRING);
        $alink2 = filter_var($alink2, FILTER_SANITIZE_STRING);
        $column3 = filter_var($column3, FILTER_SANITIZE_STRING);
        $alink3 = filter_var($alink3, FILTER_SANITIZE_STRING);
        $column4 = filter_var($column4, FILTER_SANITIZE_STRING);
        $alink4 = filter_var($alink4, FILTER_SANITIZE_STRING);
        $column5 = filter_var($column5, FILTER_SANITIZE_STRING);
        $alink5 = filter_var($alink5, FILTER_SANITIZE_STRING);
        $column6 = filter_var($column6, FILTER_SANITIZE_STRING);
        $alink6 = filter_var($alink6, FILTER_SANITIZE_STRING);
        $column7 = filter_var($column7, FILTER_SANITIZE_STRING);
        $alink7 = filter_var($alink7, FILTER_SANITIZE_STRING);
        $column8 = filter_var($column8, FILTER_SANITIZE_STRING);
        $alink8 = filter_var($alink8, FILTER_SANITIZE_STRING);
        $where = mysqli_escape_string($this->flexyDbConn, $where);

        $stmt = mysqli_stmt_init($this->flexyDbConn);
        $query = "SELECT * FROM $table;";


        if ($where != "#") {

            $query = "SELECT * FROM $table WHERE $where;";
        }

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("<p style='margin:0;color:red'>could not prepare statement</p>");
            print("<p style='margin:0;color:blue'>debug: ");
            print("\$dbObj -> selectPrint8()</p>");
        } else {

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            while ($data = mysqli_fetch_assoc($result)) {

                if ($alink != "#") {

                    print("<a href='$alink?$data[$column]&getVar2=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                if ($data[$column] != '')
                    print("$prefix$data[$column]$suffix");


                if ($alink != "#") {

                    print("</a>");
                }

                if ($alink2 != "#") {

                    print("<a href='$alink2?getVar=$data[$column]&getVar2=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                if ($data[$column2] != '')
                    print("$prefix2$data[$column2]$suffix2\n");


                if ($alink2 != "#") {

                    print("</a>");
                }

                if ($alink3 != "#") {

                    print("<a href='$alink3?getVar=$data[$column]&getVar2=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                if ($data[$column3] != '')
                    print("$prefix3$data[$column3]$suffix3");


                if ($alink3 != "#") {

                    print("</a>");
                }

                if ($alink4 != "#") {

                    print("<a href='$alink4?getVar=$data[$column]&getVar2=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                if ($data[$column4] != '')
                    print("$prefix4$data[$column4]$suffix4");


                if ($alink4 != "#") {

                    print("</a>");
                }

                if ($alink5 != "#") {

                    print("<a href='$alink5?getVar=$data[$column]&getVar2=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]'>");
                }

                if ($data[$column5] != '')
                    print("$prefix5$data[$column5]$suffix5");


                if ($alink5 != "#") {

                    print("</a>");
                }

                if ($alink6 != "#") {

                    print("<a href='$alink6?getVar=$data[$column]&getVar2=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]&getVar6=$data[$column6]'>");
                }

                if ($data[$column6] != '')
                    print("$prefix6$data[$column6]$suffix6");


                if ($alink6 != "#") {

                    print("</a>");
                }



                if ($alink7 != "#") {

                    print("<a href='$alink7?getVar=$data[$column]&getVar2=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]&getVar6=$data[$column6]&getVar7=$data[$column7]'>");
                }

                if ($data[$column7] != '')
                    print("$prefix7$data[$column7]$suffix7");


                if ($alink7 != "#") {

                    print("</a>");
                }

                if ($alink8 != "#") {

                    print("<a href='$alink8?getVar=$data[$column]&getVar2=$data[$column2]&getVar3=$data[$column3]&getVar4=$data[$column4]&getVar5=$data[$column5]&getVar6=$data[$column6]&getVar7=$data[$column7]&getVar8=$data[$column8]'>");
                }

                if ($data[$column8] != '')
                    print("$prefix8$data[$column8]$suffix8");


                if ($alink8 != "#") {

                    print("</a>");
                }
            }

            mysqli_stmt_close($stmt);
        }
    }

    function selectReturn($table, $column, $where = "#")
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $column = filter_var($column, FILTER_SANITIZE_STRING);
        //$where = mysqli_escape_string($this->flexyDbConn, $where);

        $stmt = mysqli_stmt_init($this->flexyDbConn);
        $query = "SELECT * FROM $table;";

        $value = NULL;

        if ($where != "#") {

            $query = "SELECT * FROM $table WHERE $where;";
        }

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("<p style='margin:0;color:red'>could not prepare statement</p>");
            print("<p style='margin:0;color:blue'>debug: ");
            print("\$dbObj -> selectReturn()</p>");
        } else {

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            $data = mysqli_fetch_assoc($result);

            if(!empty($data)){


                $value = $data[$column];

            }
            

            mysqli_stmt_close($stmt);

        }

        return $value;
    }

    function selectReturnF($table, $column, $where = "#")
    {

        $table = filter_var($table, FILTER_SANITIZE_STRING);
        $column = filter_var($column, FILTER_SANITIZE_STRING);
        //$where = mysqli_escape_string($this->flexyDbConn, $where);

        $stmt = mysqli_stmt_init($this->flexyDbConn);
        $query = "SELECT $column FROM $table;";

        $value = NULL;

        if ($where != "#") {

            $query = "SELECT $column FROM $table WHERE $where;";
        }

        if (!mysqli_stmt_prepare($stmt, $query)) {

            print("<p style='margin:0;color:red'>could not prepare statement</p>");
            print("<p style='margin:0;color:blue'>debug: ");
            print("\$dbObj -> selectReturn()</p>");
        } else {

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            $data = mysqli_fetch_assoc($result);

            $value = $data[$column];

            mysqli_stmt_close($stmt);
        }

        return $value;
    }

}


?>