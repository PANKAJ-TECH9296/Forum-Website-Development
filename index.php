<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Welcome - Coding Forum </title>
</head>

<body>
    <?php include "navbar.php"; ?>
    <?php include "dbconn.php"; ?>
    <div class="container my-3">
        <h2 class="text-center"> Welcome Forum - Catagory</h2>
        <div class="row">
          <?php

          $sql="SELECT * FROM `catagories`";
          $result=mysqli_query($conn,$sql);
          while ($row=mysqli_fetch_assoc($result)) {
            //echo"".$row["catagory_id"]."".$row["catagory_name"].$row["catagory_description"];
            $cat=$row["catagory_name"];
            $desc=$row["catagory_description"];
            echo' <div class="col-md-4 my-4">
            <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/500x400/?'.$cat.',programing" class="card-img-top" alt="didnot load ">
                <div class="card-body">
                    <h5 class="card-title">'.$cat.'</h5>
                    <p class="card-text text-wrap">'.$desc.'</p>
                    <a href="#" class="btn btn-primary">View Thareds </a>
                </div>
            </div>
        </div>';  

          }
          ?>

           




        </div>

    </div>
    <? include"thareds.php"; ?>
    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>