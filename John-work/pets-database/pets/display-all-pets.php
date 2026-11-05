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
    echo "Connected successfully<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Pets Stored in the Pets MySQL Table</title>

    <!-- External Style Sheet -->
    <link rel="stylesheet" type="text/css" href="display-all-pets-style.css">

    <style>
        /* body {background-image: url("niche_4k_enhanced.jpg"); } */
    </style>

</head>
<body>
    
    <h1>Registered Pets</h1>
    <button type="button"><a href="http://localhost/github/College-DSD/John-work/pets-database/pets/">Return</a></button> 

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

    $sql = "SELECT * FROM pets";
    $result = $conn->query($sql);

    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {


        $id   = (int)$row["id"];
        $name = htmlspecialchars($row["name"], ENT_QUOTES);

// ONE WAY TO DO THIS - BOTH DO THE SAME THING (I got lazy, check worksheet 7 for the other way)
        echo "<tr>";
        echo "<td>{$row["id"]}</td>";
        echo "<td>{$row["name"]}</td>";
        echo "<td>{$row["age"]}</td>";
        echo "<td>{$row["type"]}</td>";
        echo "<td><button onclick='confirmationEdit({$row["id"]})' id='editButton'>Edit</button></td>";
        // echo "<td><a href='edit.php?id={$row["id"]}'>Edit</a></td>";
        // echo "<td><button onclick='confirmationDelete({$row["id"]})' id='deleteButton'>Delete</button></td>";
        
        echo "<td><button class='delete-btn' data-id='{$id}' data-name='{$name}'>Delete</button></td>";
        
        // echo "
        //     <td>
        //         <button id='myBtn'>Open Modal</button>

        //         <!-- The Modal -->
        //         <div id='myModal' class='modal'>

        //             <!-- Modal content -->
        //             <div class='modal-content'>
        //                 <span class='close'>&times;</span>
        //                 <p>Some text in the Modal..</p>
        //             </div>

        //         </div>

        //     </td>";
        // echo "<td><a href='delete-action.php?id={$row["id"]}'>Delete</a></td>";
        echo "</tr>";

    }
    
    // Free result set
    $result->free_result();

    $conn->close();

    ?>

    <script>
        function confirmationEdit(id) {
            window.location.href = "e]dit.php?id=" + id;
        }

        function confirmationDelete(id) {
            if(confirm("Confirm delete?")) {
                window.location.href = "delete-action.php?id=" + id;
            }
        }

        
        // document.getElementById("deleteButton").addEventListener("click", header(delete-action.php?id={$row["id"]}));
    </script>

    </table>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Delete <strong id="modalName"></strong>?</p>
            <a id="confirmDelete" href="#">Yes, delete</a>
            <button type="button" id="cancelDelete">Cancel</button>
        </div>
    </div>


    <script>
        const modal = document.getElementById("myModal");
        const modalName = document.getElementById("modalName");
        const confirmDelete = document.getElementById("confirmDelete");

        // Open the modal for whichever row's button was clicked
        document.querySelectorAll(".delete-btn").forEach(btn => {
            btn.addEventListener("click", () => {
                modalName.textContent = btn.dataset.name;
                confirmDelete.href = "delete-action.php?id=" + btn.dataset.id;
                modal.style.display = "block";
            });
        });

        function closeModal() {
            modal.style.display = "none";
        }

        document.querySelector(".close").addEventListener("click", closeModal);
        document.getElementById("cancelDelete").addEventListener("click", closeModal);

        // Click outside the modal to close
        window.addEventListener("click", (event) => {
            if (event.target === modal) closeModal();
        });
    </script>

</body>
</html>