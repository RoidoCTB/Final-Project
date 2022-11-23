<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
  <div style="background-image: url('https://cdn.discordapp.com/attachments/446349596524806160/1044890819125063700/pexels-catia-matos-10721792.jpg'); height :auto;" class="bg-image">
  <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <div class="mb-md-5 mt-md-4 pb-5">
                    <form action="code.php" method="post">
                      <h2 class="fw-bold mb-2 text-uppercase">Register</h2><br>
                      <p class="text-white-50 mb-5">Please use an appropriate Username and Strong password!</p>
                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeUsernameX" name="username" class="form-control form-control-lg" required />
                        <label class="form-label" for="typeEmailX">Username</label>
                      </div>
                      <div class="form-outline form-white mb-4">
                        <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" required />
                        <label class="form-label" for="typePasswordX">Password</label>
                      </div>
                      <button class="btn btn-outline-light btn-lg px-5 mb-5" type="submit" name="register">Sign up</button>
                    </form>
                    <div>
                    <p class="mb-0">Already have an account? <a href="index.php" class="text-white-50 fw-bold">Login</a>
                    </p>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </div>
</body>
</html>