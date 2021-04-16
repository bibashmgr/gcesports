<?php

// including connect.php for database connection
require('./connect.php');

// will be deleted (for testing purpose)
function dd($users)
{
    echo '<pre>', print_r($users, true) ,'</pre>';
    die();
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
                $sql = $sql . " WHERE $key=$value";
            } else {
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
        dd($sql);
    }
    
}

$conditions = [
    'Email' => 'be2018se635@gces.edu.np',
    'Password' => '123456789'
];

$users = selectAll('userlogin', $conditions);
dd($users);

?>
