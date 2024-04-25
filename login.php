</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Landing</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <style>
        body {
            background-image : url('img/jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;

        }
    </style>
</head>

<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body bg-light">
                        <div class="text-center">
                            <h5>Halaman Login</h5>
                        </div>
                        <form action="proses_login.php" method="post">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required>
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                            <div class="d-grid mt-2">
                                <button class="btn btn-secondary" type="submit">Login</button>
                            </div>
                        </form>
                        <hr>
                        <p>Belum punya akun ? <a href="register.php">Silahkan Register dulu</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>