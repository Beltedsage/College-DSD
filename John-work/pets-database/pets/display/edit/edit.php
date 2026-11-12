<?php

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
    // echo "Connected successfully<br>";

    $sql = "SELECT * FROM pets WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_GET['id']);
    $row = $stmt->execute();
    $result = $stmt->get_result();
    $pet = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="display-all-pets-style.css">
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>


</head>
<body>

    <?php include "../../partials/menu.php" ?>

    <h1>Edit <?= $pet['name'] ?></h1>

    <form action="edit-action.php" method="POST">
        <p>
            Name:
            <input type="text" name="name" value="<?= $pet['name'] ?>">
        </p>
        <p>
            Age:
            <input type="text" name="age" value="<?= $pet['age'] ?>">
        </p>
        <p>
            Type:
            <input type="text" name="type" value="<?= $pet['type'] ?>">
        </p>
        <p>
            <input type="submit" value="Update">
        </p>
        <input type="hidden" name="id" value="<?= $pet['id'] ?>">
    </form>

    <?php if(isset($_GET["msg"]) && $_GET["msg"]=="success"): ?>
        <div class="success">
            Updated successfully.
        </div>
    <?php endif ?>
</body>
</html>

<?php
    //
    $result->free_result();
    $conn->close();
    //
?>