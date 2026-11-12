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
<?php 
    include "partials/menu.php";
?>
    <h1>Search</h1>
    <form action="search.php" method="POST">
        <!-- <label for="search">Enter part of a pet's name:</label> -->
        <input type="text" name="search" placeholder="Enter a pet's name" value="<?= $user_search_string ?>">
        <input type="submit" value="Search">
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

        <?php table($result, $conn) ?>

        </table>
    
    <?php endif ?>
    </body>
</html>