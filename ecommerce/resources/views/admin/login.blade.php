<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>

<div class="container login-container">
    <h2 class="text-center">Admin Login</h2>
    <form action="{{route ('admindo.login')}}" method="post">
    @csrf
    <div class="row">
        <div class="col">
    <div class="form-group">
        <label for="username" text><strong>Username:</strong></label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
    </div>
        </div>
        <div class="col">
    <div class="form-group">
        <label for="password"><strong>Password:</strong></label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
    </div>
        </div>
   
    <button type="submit" class="btn btn-primary btn-block">Login</button>
</form>

</div>
    


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>