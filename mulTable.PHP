<!DOCTYPE html>
<html lang="en">
<head>
  <title>Multiplication Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Multiplication Table</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Results</th>
      </tr>
    </thead>
    <tbody>
    <?php

    echo "Multiplication table for 2: <br>";
for ($i = 1; $i <= 10; $i++) {
    echo "2 x $i = " . (2 * $i) . "<br>";
}
?>
      <tr>
        <td>2 X 1 = 2</td>
      </tr>
      <tr>
        <td>2 X 2 = 4</td>
      </tr>
      <tr>
        <td>2 X 3 = 6</td>
      </tr> 
 
    </tbody>
  </table>
</div>

</body>
</html>
