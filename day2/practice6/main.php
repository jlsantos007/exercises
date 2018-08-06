<!DOCTYPE html>
<html>
<head>
	<title>Practice Exercise 6</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <style type="text/css">
    body{
      background-color: #3D9970;
    }
  </style>

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<a class="navbar-brand" href="#">Day 2 Practice exercises</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNav">
    		<ul class="navbar-nav">
      			<li class="nav-item">
        			<a class="nav-link" href="main.php">Practice 6</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="/exercises/day2/practice7/main.php">Practice 7</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="/exercises/day2/practice8/main.php">Practice 8</a>
      			</li>
    		</ul>
  		</div>
	</nav>

  <br>

  <div class="container">          
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Book Title</th>
          <th>Books Expected Returned Date</th>
          <th>Books Returned Date</th>
          <th>Fine</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Book 1</td>
          <td>9-25-2015</td>
          <td>9-29-2015</td>
          <td><?php require_once 'bookFineCalculation.php'; ?></td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>