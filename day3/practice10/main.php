<!DOCTYPE html>
<html>
<head>
    <title>Practice Exercises</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>

    <style type="text/css">
        body {
            background-color: #3D9970;
        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Day 3 Practice exercises</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/exercises-master/day3/practice9/main.php">Practice 9</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="main.php">Practice 10</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <h1>Rotating Matrix</h1>

    <form action="main.php" method="post">
        <div class="form-group">
            <label>N times to be rotated:</label>
            <input type="text" class="form-control" name="n_rotate">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" id="">Rotate</button>
        </div>
    </form>
</div>

<div class="container">
    <?php
    include "matrix.php";
    $matrix = array(
        array(1, 2, 3,),
        array(4, 5, 6),
        array(7, 8, 9),
    );


    $matrix_class = new Matrix();
    echo "<h2>Original Matrix</h2>";
    echo "<table class='table table-bordered'>";
    $matrix_class->actionPrintMatrix($matrix);
    echo "</table>";

    if (empty($_POST['n_rotate'])) {
        $matrix_class->actionCounterClockwise($matrix, 0);
    } else {
        echo "<br>";
        $new_matrix = $matrix_class->actionCounterClockwise($matrix, $_POST['n_rotate']);
        echo "<h2>Rotated Matrix</h2>";
        echo "<table class='table table-bordered'>";
        $matrix_class->actionPrintMatrix($new_matrix);
        echo "</table>";
    }
    ?>
</div>

</body>
</html>