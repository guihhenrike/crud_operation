<?php
include 'assets/header.php';
include 'config/Database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $database = new Database();
    $client = $database->selectById($id);

    if ($client) {
        $username = $client['username'];
        $email = $client['email'];
        $mobile = $client['mobile'];
    } else {
        header('Location: index.php');
        exit;
    }
} else {
    echo 'Client not found';
    exit;
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center mt-5">Clients</h1>
            <div class="card mt-5">
                <div class="card-body">
                    <form action="update.php?id=<?= $id ?>" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" value="<?= $username; ?>" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="<?= $email; ?>" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="text" name="mobile" class="form-control" value="<?= $mobile; ?>" autocomplete="off" required>
                        </div>
                        <!-- Apenas um campo oculto para o ID -->
                        <input type="hidden" name="id" value="<?= $id ?>">

                        <div class="mt-4">
                            <a href="clients.php" class="btn btn-success">Back</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>


                </div>

            </div>

        </div>

    </div>

</div>