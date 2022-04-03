<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/crud.css">
    <title>Document</title>
</head>
<body>
    <div class="cardcontainer">
    <div class="card">
    <h3 class="card-header">Registration form</h3>
    <form action="{{ route('register.custom') }}" method="POST">
    @csrf
<div class="inputform">
<label for="">full name</label>
    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

            <div class="inputform">
            <label for="">email</label>
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="inputform">
                            <label for="">password</label>
        <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

        <div class="checkbox">
         <label><input type="checkbox" name="remember"> Remember Me</label>
        </div>
                          

                            <div class="btn">
        <button type="submit" class="btncard">Sign up</button>
                            </div>
                        </form></div></div>

</body>
</html>