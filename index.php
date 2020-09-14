<?php

    $servername = 'localhost';
    $user = 'giovanni';
    $pass = 'giovanni';
    $db = 'dbhotel';

    $conn = new mysqli($servername, $user, $pass, $db);

    if ($conn && $conn->connect_error) {
        echo "Error: " . $conn->connect_error;
        return;
    } else {
        echo "Connessione db ok! <br /> <br />";
    }


    // // Es. 1
    // $sql = "
    //
    //     SELECT *
    //     FROM pagamenti
    // ";
    //
    // $result = $conn->query($sql);
    //
    // if ($result && $result->num_rows > 0) {
    //
    //     echo "<ol>";
    //
    //     while ($row = $result->fetch_assoc()) {
    //
    //         echo "<li>"
    //             .$row['id'] . " - " . $row['status'] . " - " . $row['price']
    //         . "</li>";
    //     }
    //
    //     echo "</ol>";
    // } elseif ($result) {
    //     echo "0 result";
    // } else {
    //     echo "query error";
    // }



    // // Es. 2
    // $sql = "
    //
    //     DELETE
    //     FROM pagamenti
    //     where id = 8
    // ";
    //
    // $result = $conn->query($sql);
    //
    // if ($result) {
    //
    //     echo "deleted. <br />";
    //     echo $result;
    //
    // } else {
    //     echo "Error";
    // }


    // // Es. 3
    // $sql = "
    //
    //     DELETE
    //     FROM pagamenti
    //     where pagante_id = 6 && status LIKE 'rejected'
    // ";
    //
    // $result = $conn->query($sql);
    //
    // if ($result) {
    //
    //     echo "deleted. <br />";
    //     echo $result;
    //
    // } else {
    //     echo "Error";
    // }


    // Es. 4
    $sql = "

        SELECT id, status, price
        FROM pagamenti
        WHERE price > 600
    ";

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {

        echo "<ul>";

        while ($row = $result->fetch_assoc()) {

            echo "<li>"
                . $row['id'] . " - " . $row['status'] . " - " . $row['price']
            . "</li>";
        }

        echo "</ul>";


    } elseif ($result) {

        echo "0 result";
    } else {
        
        echo "Query error";
    }




    $conn->close();

?>
