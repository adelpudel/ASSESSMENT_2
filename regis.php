<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
</head>

<body>
    <div class="container col-md-6 mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">REGISTRASI</h5>

                <form action="proses_regis.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" required name="username" placeholder="user">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="pass2">Confirm Password</label>
                        <input type="password" class="form-control" id="pass2" name="pass2" placeholder="" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Regis</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>