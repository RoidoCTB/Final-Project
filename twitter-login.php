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
    <style>
      .form-control:focus {
      border-color: inherit;
      -webkit-box-shadow: none;
      box-shadow: none;
    }
    </style>
</head>
<body>

<?php $username = $_GET['user']; ?>

<div class="container">
        <div class="row">
            <div class="col-9 mx-auto float-end">
                <a href="index.php">Sign out</a>
            </div>
        </div>
    </div>
<section class="vh-100 gradient-custom ">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-10 col-lg-11 col-xl-9">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <div class="mb-md-5 mt-md-4 pb-5">
                    <h2 class="fw-bold mb-2 text-uppercase p-5">Welcome! <?php echo $username; ?></h2>
                    <div class="form-outline form-white mb-4 text-center">
                      <form id="tweet-form" class="form-control" action="code.php" method="post">
                        <input class="d-none" name="username" value="<?php echo $username; ?>">
                        <textarea class="form-control border-0" placeholder="What's happening?" form="tweet-form" style="outline: none;" name="tweet-body"></textarea>
                        <input class="float-end btn btn-primary mt-3" type="submit" name="tweet" value="Tweet">
                      </form>
                    </div>
                  </div>
                </div>
                <ul class="list-group m-5">
                  <?php 
                    require "dbcon.php";
                    $query = "SELECT * FROM tweet";
                    $result = mysqli_query($con, $query);

                    if(mysqli_num_rows($result) > 0)
                    {
                        foreach($result as $tweet)
                        {
                  ?>
                          <li class="list-group-item bg-primary border-dark rounded mb-3">
                            <div class="p-1 text-white">
                              <h4><u><?php echo $tweet['username']; ?></u></h4>
                              <div><?php echo $tweet['text']; ?></div>
                            </div>
                          </li>
                  <?php
                        }
                    }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
