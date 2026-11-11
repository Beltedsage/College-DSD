<?php
include "library/db.php";

$conn = connect();

$show_results = false;
$user_search_string = "";

if (isset($_POST['search'])) {
    $show_results = true;
    $result = find_pet($_POST['search'], $conn);
    $user_search_string = $_POST['search'];
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include "partials/menu.php"; ?>
    <h1>Search</h1>
    <form action="search.php" method="POST">
        <p>
            Enter part of a pets name:
            <input type="text" name="search" value="<?= $user_search_string ?>">
            <input type="submit" value="Find">
        </p>
    </form>

<?php if ($show_results): ?>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Type</th>
                <th></th>
                <th></th>
            </tr>

        <?php while ($row = $result->fetch_array(MYSQLI_ASSOC)): ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["name"] ?></td>
                <td><?= $row["age"] ?></td>
                <td><?= $row["type"] ?></td>
                <td><a href="edit.php?id=<?= $row["id"] ?>">Edit</a></td>
                <td><a href="delete-action.php?id=<?= $row["id"] ?>">Delete</a></td>
            </tr>
        <?php endwhile; ?>

        </table>
    
    <?php endif ?>
    </body>
</html>