<?php
    $path = $_SERVER["PHP_SELF"];
    $current = basename($path);
?>

<div class="navigation-bar">
    <a href="/Github/College-DSD/John-work/pets-database/pets"
       class="<?= $current == 'index.php' ? 'active' : '' ?>">Home</a>

    <a href="/Github/College-DSD/John-work/pets-database/pets/add/add-a-pet.php"
       class="<?= $current == 'add-a-pet.php' ? 'active' : '' ?>">Add a pet</a>

    <a href="/Github/College-DSD/John-work/pets-database/pets/display/display-all-pets.php"
       class="<?= in_array($current, ['display-all-pets.php', 'edit.php', 'delete-action.php']) ? 'active' : '' ?>"">Show all</a>

    <a href="/Github/College-DSD/John-work/pets-database/pets/search.php"
       class="<?= $current == 'search.php' ? 'active' : '' ?>">Search</a>
</div>