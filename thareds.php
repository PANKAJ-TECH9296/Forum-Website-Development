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
        
       
        <div class="jumbotron">
            <h1 class="display-4">Welcome To<?php echo $cat ?> Forum</h1>
            <p class="lead">
            <p>Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code
                readability with the use of significant indentation. Python is dynamically typed and garbage-collected.
                It supports multiple programming paradigms</p>
            <hr class="my-4">

            <a href="https://www.python.org/doc/" class="btn btn-primary active" role="button" aria-pressed="true">Learn
                more</a>
        </div>

    </div>






    </div>
    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>