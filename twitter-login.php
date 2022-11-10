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
                    <h2 class="fw-bold mb-2 text-uppercase p-5">Welcome <?php echo $_GET['user']; ?></h2>
                    <div class="form-outline form-white mb-4 text-center">
                      <input class="input-group input-group-text p-5" type="text" placeholder="What's happening?">
                <input class="float-end btn btn-primary mt-3" type="submit" name="" value="Tweet">
                    </div>
                  </div>
                </div>
                <div class="list-group mx-auto text-center ">
                    <div class="d-flex w-100 justify-content-between">
                       <h5 class="mb-3 mt-5">This is a tweet</h5>
                    </div>
                        <p class="mb-5 p-5  border border-primary">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione mollitia, laudantium quas vel facere minima ullam obcaecati reiciendis eveniet sapiente aliquid iure. Maxime, corrupti maiores. Perspiciatis, hic. Beatae, iusto consectetur.</p>
                           <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-3">This is a tweet</h5>
                           </div>
                             <p class="mb-5 p-5 border border-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi obcaecati repellat ratione distinctio labore praesentium at, nam soluta veritatis ea. Totam optio molestias dolore culpa obcaecati, unde quisquam ab. Magnam?</p>
                                <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-3">This is a tweet</h5>
                                </div>
                                  <p class="mb-5 p-5 border border-primary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit minus repellendus, cum quia, id porro quam consequuntur ipsam quisquam quod praesentium eos adipisci cumque libero reprehenderit pariatur aliquid nostrum labore.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
