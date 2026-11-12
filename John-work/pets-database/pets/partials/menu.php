<?php
    $path = $_SERVER["PHP_SELF"];
    $current = basename($path);
    
    $show_results = false;
    $user_search_string = "";
 
    if (isset($_POST['search'])) {
       $show_results = true;
       $result = find_pet($_POST['search'], $conn);
       $user_search_string = $_POST['search'];
    }
 
 ?>

<div class="navigation-bar">
    <a href="/Github/College-DSD/John-work/pets-database/pets"
       class="<?= $current == 'index.php' ? 'active' : '' ?>">Home</a>

    <a href="/Github/College-DSD/John-work/pets-database/pets/add/add-a-pet.php"
       class="<?= $current == 'add-a-pet.php' ? 'active' : '' ?>">Add a pet</a>

    <a href="/Github/College-DSD/John-work/pets-database/pets/display/display-all-pets.php"
       class="<?= in_array($current, ['display-all-pets.php', 'edit.php', 'delete-action.php']) ? 'active' : '' ?>">Show all</a>

    <a href="/Github/College-DSD/John-work/pets-database/pets/search.php"
       class="<?= $current == 'search.php' ? 'active' : '' ?>">Search</a>

    <form action="search.php" method="POST">
            <!-- <label for="search">Enter part of a pet's name:</label> -->
            <input type="text" name="search" placeholder="Enter a pet's name" value="<?= $user_search_string ?>">
            <input type="submit" value="Search">
    </form>
</div>

<!-- <br /><b>Warning</b>:  Undefined variable $user_search_string in <b>C:\Users\archi\Documents\GitHub\College-DSD\John-work\pets-database\pets\partials\menu.php</b> on line <b>22</b><br /> -->
 <!-- <br /><b>Warning</b>:  Undefined variable $user_search_string in <b>C:\Users\archi\Documents\GitHub\College-DSD\John-work\pets-database\pets\partials\menu.php</b> on line <b>29</b><br /> -->