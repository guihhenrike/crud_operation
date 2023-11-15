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

    <div class="container border border-primary d-flex justify-content-center w-25 mt-5 bg-black rounded">
        <h1 class="text-black">Register</h1>
    </div>

    <div class="  mt-5 ">

        <form method="POST" action="process.php" class="container w-50 form-control p-5 bg-danger border border-primary">
            
            <div class="input-group mt-4 w-50 container">

                    <input type="text" class="form-control rounded border border-none w-25 " name="username" placeholder="Enter your username"
                    autocomplete="off" required>
            </div>

            <div class="input-group mt-4 w-50 container">

                <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off" 
                    required>

            </div>

            <div class="input-group mt-4 w-50 container">

                <input type="text" class="form-control " name="mobile" placeholder="your mobile number"
                    autocomplete="off" maxlength="11" required>
            </div>

            <div class="input-group mt-4 w-50 container">
                <button type="submit" name="submit"
                    class="btn btn-primary form-control mt-5">Submit</button>
            </div>
        </form>

    </div>

</body>



</html>