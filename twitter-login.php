<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="text-center fs-1 text">
                    Welcome <?php echo $_GET['user']; ?>
                </div>
            </div>
        </div>
    </div>
  <div class="container-fluid mt-3 p-5">
    <div class="row">
        <div class="col-6 mx-auto">
                <input class="input-group input-group-text p-5" type="text" placeholder="What's happening?">
                <input class="float-end btn btn-primary mt-3" type="submit" name="" value="Tweet">
        </div>
    </div>
  </div>
    <div class="container mt-5 p-5">
        <div class="row">
            <div class="col-9 mx-auto float-end">
                <a href="index.php">Sign out</a>
            </div>
        </div>
    </div>
</body>
</html>