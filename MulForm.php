<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container md-5">
        <form> 
            <form action="mulTable.PHP" method="post">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Insert Number</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Insert Number">
            </div>
            <br>
            <div class="mb-3">
                <input type="submit" value="Send" class="btn btn-primary">
            </div>
        </form>
    </div>
    
</body>
</html>