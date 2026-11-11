<?php

function connect() {
    // Login gubbins
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, "pets");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); // Error message
    }
    
    return $conn;
}

function find_pet($search, $conn) {
    $query = "SELECT * FROM pets WHERE name LIKE ?";
    $stmt = $conn->prepare($query);

    $search = "{$_POST['search']}%";
    $stmt->bind_param("s", $search);
    $stmt->execute();
    return $stmt->get_result();
}

?>