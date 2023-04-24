<?php

require "functions.php";

if (isset($_POST['submit'])) {
    $response = login($_POST['username'], $_POST['password']);
}

?>


<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register Securely</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>

    <body>
        <div class=" my-4 container col-lg-6 col-md-6">
            <h1>Register</h1>
            <form class="my-4" action="" method="post" autocomplete="off">

                <div class="mb-3">
                    <label for="exampleInputUsername1" class="form-label">User Name</label>
                    <input type="text" name="username" class="form-control" id="exampleInputUsername1"
                        value="<?php echo @$_POST['username'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="text" name="password" class="form-control" id="exampleInputPassword1"
                        value="<?php echo @$_POST['password'] ?>">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                <a href="index.php">Register Here</a>
                <p class="error"><?php echo @$response; ?></p>

            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
    </body>

</html>