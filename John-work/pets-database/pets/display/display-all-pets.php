<!-- PLEASE NOTE THAT MYSQL DATABASES VIA PHPMYADMIN ARE LOCAL ONLY -->
<!-- THIS MEANS THAT DATABASES WILL NOT CARRY OVER BETWEEN DEVICES -->
<!-- AKA EXPORTED AND IMPORTED -->
<!-- THANK YOU PARDS -->

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

    $perPage = 10; // rows per page

    // Which page are we on? Defaults to 1, and is forced to be a whole number
    $page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
    if ($page < 1) {
        $page = 1;
    }

    // How many rows are there in total?
    $countResult = $conn->query("SELECT COUNT(*) AS total FROM pets");
    $totalRows = $countResult->fetch_assoc()["total"];
    $totalPages = max(1, ceil($totalRows / $perPage));

    // Don't let someone go past the last page
    if ($page > $totalPages) {
        $page = $totalPages;
    }

    // Where does this page start?
    $offset = ($page - 1) * $perPage;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Pets Stored in the Pets MySQL Table</title>
    <link rel="stylesheet" type="text/css" href="../style.css">

</head>
<body>

    <?php
        include "../partials/menu.php";
        include "../library/db.php";
    ?>
    
    <h1>Registered Pets</h1>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=="success"): ?>
    <div class="success">
        Updated successfully.
    </div>
<?php endif ?>

<?php if(isset($_GET["msg"]) && $_GET["msg"]=="delete-success"): ?>
    <div class="success">
        Delete successful.
    </div>
<?php endif ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Type</th>
            <th>#</th>
            <th>#</th>
        </tr>

    

    <?php

    $stmt = $conn->prepare("SELECT * FROM pets ORDER BY id LIMIT ? OFFSET ?");
    $stmt->bind_param("ii", $perPage, $offset);
    $stmt->execute();
    $result = $stmt->get_result();    

    $stmt->close();

    table($result, $conn);
    
    // Free result set
    $result->free_result();

    $conn->close();

    ?>

    <script>
        function confirmationEdit(id) {
            window.location.href = "edit/edit.php?id=" + id;
        }

        function confirmationDelete(id) {
            if(confirm("Confirm delete?")) {
                window.location.href = "delete/delete-action.php?id=" + id;
            }
        }

        
        // document.getElementById("deleteButton").addEventListener("click", header(delete-action.php?id={$row["id"]}));
    </script>

    </table>

    <?php
        $window = 2;
        $start = max(1, $page - $window);
        $end   = min($totalPages, $page + $window);
    ?>

    <div class="pagination">
        <?php if ($page > 1): ?>
            <a href="?page=1">&laquo; First</a>
            <a href="?page=<?= $page - 1 ?>">&lsaquo; Previous</a>
        <?php endif; ?>

        <?php for ($i = $start; $i <= $end; $i++): ?>
            <?php if ($i == $page): ?>
                <strong><?= $i ?></strong>
            <?php else: ?>
                <a href="?page=<?= $i ?>"><?= $i ?></a>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if ($page < $totalPages): ?>
            <a href="?page=<?= $page + 1 ?>">Next &rsaquo;</a>
            <a href="?page=<?= $totalPages ?>">Last &raquo;</a>
        <?php endif; ?>
    </div>

</body>
</html>