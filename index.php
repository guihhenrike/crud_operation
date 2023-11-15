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

    <div class="d-flex justify-content-center mt-5">
    <i class="fa-solid  fa-2xl" style="color: #005eff; font-family: 'Roboto', sans-serif;"><img src="./img/img-register.svg" alt="">Register</i>
    </div>

    <div class="mt-2">

        <form method="POST" action="process.php" class="container w-50 p-5 ">
            
            <div class="input-group mt-2 w-50 container">

                    <input type="text" class="form-control rounded border border-primary w-25" name="username" placeholder="Enter your username"
                    autocomplete="off" required>
            </div>

            <div class="input-group mt-4 w-50 container">

                <input type="email" class="form-control rounded border border-primary w-25" name="email" placeholder="Enter your email" autocomplete="off" 
                    required>

            </div>

            <div class="input-group mt-4 w-50 container">

                <input type="text" class="form-control rounded border border-primary w-25" name="mobile" placeholder="your mobile number"
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