<?php
    if ( isset($_GET["clear"])) {
        if(isset($_COOKIE["guess-target"])) {
            setcookie("guess-target", "", time() - 100);
            setcookie("user-name",    "", time() - 100);
            header("location: http://localhost/GitHub/College-DSD/John-work/cookies/higherLower.php");
            die();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higher or Lower - Cookie Demo</title>
</head>
<body>
    <h1>Higher or Lower - The Cookie Demo</h1>
</body>
</html>

<?php
    if ( ! isset($_COOKIE["guess-target"])) {
        echo "Welcome to the number guessing game!";
        echo"<br>";
        echo "Cookie is not set!";
        echo"<br>";
        echo "<a href='http://localhost/GitHub/College-DSD/John-work/cookies/higherLower.php'>Click to refresh</a>";

        $seconds_in_one_day = 60 * 60 * 24;
        setcookie("guess-target", "13",     time() + $seconds_in_one_day);
        setcookie("user-name",    "Archie", time() + $seconds_in_one_day);
    } else {
        
        echo "Cookie is set!";
        echo "<br>";
        echo "Value is: " . $_COOKIE["guess-target"];
        echo "<br>";
        echo "Value is: " . $_COOKIE["user-name"];
        echo "<br>";
        echo "<a href='higherLower.php?clear=1'>remove cookie</a>";
    }
?>