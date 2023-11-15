<?php
    include 'assets/header.php';
    include 'config/Database.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $database = new Database();
        $client = $database->selectById($id);

        if($client) {
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
                    <form action="update.php" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control"
                                value="<?= $username; ?>">
                            <input type="hidden" name="id" value="">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control"
                                value="<?= $email; ?>">
                            <input type="hidden" name="id" value="">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="text" name="mobile" class="form-control"
                                value="<?= $mobile; ?>">
                            <input type="hidden" name="id" value="">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <a href="clients.php" class="btn btn-success">Back</a>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- <?php
include 'assets/footer.php';
?> -->