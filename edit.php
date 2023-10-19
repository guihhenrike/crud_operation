<?php

    include 'assets/header.php';


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
                                <input type="text" name="name" class="form-control" value="">
                               <input type="hidden" name="id" value="<?php echo $client['id']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="">
                                <input type="hidden" name="id" value="<?php echo $client['id']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="text" name="mobile" class="form-control" value="">
                                <input type="hidden" name="id" value="<?php echo $client['id']; ?>">
                            </div>
                            <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <a href="index.php" class="btn btn-success">Back</a>
                            <a href="delete.php?id=<?php echo $client['id']; ?>" class="btn btn-danger">Delete</a>
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

