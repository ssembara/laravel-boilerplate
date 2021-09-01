<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Form Login</h3>
                </div>
                <form action="{{ route('signin') }}" method="post">
                @csrf
                    <div class="form-group">
                        <label for=""><strong>Nim</strong></label>
                        <input type="text" name="nim" class="form-control" placeholder="Nim">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Pin</strong></label>
                        <input type="password" name="pin" class="form-control" placeholder="Pin">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Log In</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>