<?php
include 'assets/header.php';
include 'config/Database.php';

?>

<div class="d-flex justify-content-center mt-5">
    <i class="fa-solid  fa-2xl" style="color: #005eff; font-family: 'Roboto', sans-serif;"><img
            src="./img/contact-card.svg" alt="">Clients</i>
</div>

<div class="container table-responsive mt-2 p-5">
    <table class="table table-hover table-borderless ">
        <thead class="">
            <tr class="text-center">
                <th scope="col"><i class="fa-solid fa-id-card"></i></th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody class="text-center mt-2">
            <?php
            $db = new Database();
            $clients = $db->select();
            foreach ($clients as $client) {
                ?> <tr class='text-center'>
                <td> <i class="fa-solid fa-user"></i> </td>
                <td> <?=  $client['username'] ?> </td> 
                <td> <?= $client['email'] ?> </td> 
                <td> <?= $client['mobile'] ?> </td>
                <td> <a href="edit.php?id=<?= $client['id'] ?>"> <i class="fa-solid fa-pen-to-square" style="color: #4d2afe;"></i> </a> </td>
                <td> <a href="delete.php?id=<?= $client['id'] ?>"> <i class="fa-solid fa-trash" style="color: #ff0000;"></i></a> </td><?
                echo "</tr>";
                
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>