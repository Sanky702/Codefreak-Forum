<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeFreak Forums</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <?php require 'partials/navbar.php';?>
    <?php require 'partials/_dbconnect.php';?>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/2400x700/?apple,code" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/2400x700/?programming,google" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/2400x700/?webdevelopment,code" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">

        <h2 class = text-center py-4>CodeFreak Categories</h2>
        <div class="row">
            <?php 
        
        $sql = "SELECT * FROM `categories`";
        $result= mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
          $id = $row['category_id'];
          $cat = $row['category_name'];
          $desc = $row['category_description'];
          echo ' <div class="col-md-3 my-4 text-center">            
                <div class="card" style="width: 18rem;">
                  <img src="https://source.unsplash.com/1200x900/?' .$cat . ',code"
                      class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">'. $cat .'</h5>
                      <p class="card-text">' . substr($desc, 0, 15). '...</p>
                      <a href="threadlist.php?catid='. $id .'" class="btn btn-primary">View Threads</a>
                  </div>
              </div>
          </div>';
        }
        ?>
        </div>
    </div>
    <?php require 'partials/footer.php';
   ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>