<?php
    include 'assets/header.php';
    include 'config/Database.php';

?>

    <div class="container mt-5 p-5">
        <table class="table table-dark table-hover table-striped">
            <thead class="border-solid border-4 rounded-pill border-light">
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="d-flex justify-content-center">
                    <?php 
                        $db = new Database();
                        $clients = $db->select();
                        foreach($clients as $client){
                            echo "<tr class='text-center'>";
                            echo "<td>".$client['id']."</td>";
                            echo "<td>".$client['username']."</td>";
                            echo "<td>".$client['email']."</td>";
                            echo "<td>".$client['mobile']."</td>";
                            echo "<td><a href='delete.php?id=".$client['id']."' class='btn btn-danger'>Delete</a> | <a href='edit.php?id=".$client['id']."' class='btn btn-info'>Edit</a></td>";
                            echo "</tr>";
                        }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>


</body>

</html>