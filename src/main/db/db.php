<?php

// including connect.php for database connection
require('./connect.php');


function executeQuery($sql, $data)
{
    global $conn;

    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}


// returns all stored records from given table
function selectAll($table, $conditions = []) // second parameter is optional
{
    global $conn;

    $sql = "SELECT * FROM $table";

    if(empty($conditions)) {

        // returns records if conditions arenot given
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;

    } else {

        // returns records that matches the given conditions
        $i=0;
        foreach ($conditions as $key => $value){

            if($i==0){
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $i++;

        }
        
        $stmt = executeQuery($sql, $conditions);

        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;

    }
    
}


// returns only one required record from given table
function selectOne($table, $conditions) // second parameter isnot optional
{
    global $conn;

    $sql = "SELECT * FROM $table";


    $i=0;
    foreach ($conditions as $key => $value){

        if($i==0){
            $sql = $sql . " WHERE $key=?";
        } else {
            $sql = $sql . " AND $key=?";
        }
        $i++;
    }

    $sql = $sql . " LIMIT 1";

    $stmt = executeQuery($sql, $conditions);

    $records = $stmt->get_result()->fetch_assoc();
    return $records;
    
}

?>
