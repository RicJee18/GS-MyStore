<?php

require_once('store.php');
$mystore->login();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Store | Log In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
           <div class="col-md-6">
                <div class="card">

                    <div class="card-header bg-dark">
                        <div class="card-title text-white text-center"><h1>Log In </h1></div>
                    </div>

                    <div class="card-body">
                        <div class="form">
                        
                            <form action="" method="post">

                                <div class="form-group">
                                <label> Username</label>
                                <input type="text" name= "username"  id = "username" value="" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                <label> Password</label>
                                <input type="password" name= "password"  id = "password" value="" class="form-control">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>