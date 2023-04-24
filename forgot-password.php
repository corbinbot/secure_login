<?php

require "functions.php";

if (isset($_POST['submit'])) {
    $response = pass_reset($_POST['email']);
}

?>


<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reset Password</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>

    <body>
        <div class=" my-4 container col-lg-6 col-md-6">
            <h1>Password Reset</h1>
            <form class="my-4" action="" method="post" autocomplete="off">

                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputUsername1"
                        value="<?php echo @$_POST['email'] ?>">
                </div>


                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                <!-- <a href="index.php">Register Here</a> -->
                <br>
                <br>
                <a href="login.php">Back To Login Page</a>
                <?php
                if (@$response == 'success') {
                    ?>
                <p class="success">Please Check Your email Account and use new password</p>
                <?php
                } else {
                    ?>
                <p class="error"><?php echo @$response; ?></p>
                <?php
                }
                ?>

            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
    </body>

</html>