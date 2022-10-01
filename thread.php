<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeFreak Forums</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
    #ques{
        min-height: 433px;
    }
</style>

<body>
    <?php require 'partials/navbar.php';?>
    <?php require 'partials/_dbconnect.php';?>
    <?php
    $id = $_GET['threadid'];
     $sql = "SELECT * FROM `threads` WHERE thread_id='$id'";
     $result= mysqli_query($conn, $sql);
     while($row = mysqli_fetch_assoc($result)){
       $cat = $row['thread_title'];
       $desc = $row['thread_desc'];
    
    echo '<div class="container py-2">
        <div class="jumbotron">
            <h1 class="display-4">'.$cat.'</h1>
            <p class="lead">'. $desc.'</p>
            <hr class="my-4">
            <p>No Spam / Advertising / Self-promote in the forums.It is strictly prohibited.
                Do not post copyright-infringing material. ...
                Do not post “offensive” posts, links or images. ...
                Do not cross post questions. ...
                Do not PM users asking for help. ...
                Remain respectful of other members at all times.</p>
            <a class="btn btn-primary" href="#" role="button">Learn More</a>
        </div>
        
    </div>';
     }
    ?>
    <div class="container" id="ques">
        <h2 class = text-center >Reviews and Queries</h2>
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