<?php
    include 'assets/header.php';

    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        ?>
        <div class='alert alert-danger container border border-solid d-flex justify-content-center w-25 mt-4'>
            <span class=" text-danger d-flex justify-content-center">This username always exists</span>
        </div>
        <?php
    }
    ?>

    <div class="container border border-double d-flex justify-content-center w-25 mt-5">
        <h1 class="text-white">Register</h1>
    </div>

    <div class="container border border-solid d-flex justify-content-center w-50  mt-5 p-5  ">

        <form method="POST" action="process.php">
            <div class="form-group mt-2">
                <label>UserName</label>
                <input type="text" class="form-control" name="username" placeholder="Enter your username"
                    autocomplete="off" required>
            </div>

            <div class="form-group mt-2">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off"
                    required>
            </div>

            <div class="form-group mt-2">
                <label>Mobile</label>
                <input type="text" class="form-control " name="mobile" placeholder="your mobile number"
                    autocomplete="off" maxlength="11" required>
            </div>

            <button type="submit" name="submit"
                class="btn btn-primary form-control d-flex justify-content-center mt-5">Submit</button>
        </form>

    </div>

</body>



</html>