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

function table($result, $conn) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

// ONE WAY TO DO THIS - BOTH DO THE SAME THING (I got lazy, check worksheet 7 for the other way)
        echo "<tr>";
        echo "<td>{$row["id"]}</td>";
        echo "<td>{$row["name"]}</td>";
        echo "<td>{$row["age"]}</td>";
        echo "<td>{$row["type"]}</td>";
        echo "<td><button onclick='confirmationEdit({$row["id"]})' id='editButton'>Edit</button></td>";
        // echo "<td><a href='edit.php?id={$row["id"]}'>Edit</a></td>";
        echo "<td><button onclick='confirmationDelete({$row["id"]})' id='deleteButton'>Delete</button></td>";
        // echo "<td><a href='delete-action.php?id={$row["id"]}'>Delete</a></td>";
        echo "</tr>";

    }
}

?>