<?php

    function select($connection, $table, $filter, $orderBy){
        $strCommand ="SELECT * FROM $table";
        if ($filter){
            $strCommand .= "WHERE $filter";
        }
        if ($orderBy){
            $strCommand .= "ORDER BY $orderBy";
        }
        $result = mysqli_query($connection, $strCommand);

        return $result;
    

    }

    function insert($connection, $table, $colName, $value ){
        $strCommand = "INSERT INTO $table ($colName) values ($value)";
        $result = mysqli_query($connection, $strCommand);
        return $result;
    }
    
    function update($connection, $table, $columnsValue,  $filter){
        $strCommand = "update $table   set $columnsValue ";
        if($filter){
            $strCommand .= "  WHERE $filter";
        }
        $result = mysqli_query($connection, $strCommand);
        return $result;
    }


    function deleteData($connection, $table, $filter){
        $strCommand = "DELETE FROM $table  ";
        if($filter){
            $strCommand .= "  WHERE $filter";
        }
        $result = mysqli_query($connection, $strCommand);
        return $result;
    }

?>