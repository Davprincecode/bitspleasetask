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
                <h3 class="card-header">Login</h3>
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
    <div class="inputform">
        <label for="">email</label>
    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                                @if ($errors->has('email'))
     <span class="text">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

<div class="inputform">
<label for="">password</label>
<input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
<span class="text">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            
                                <div class="checkbox">
                                    <label>
<input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                           <p>password must contain special character</p>

                            <div class="btn">
            <button type="submit" class="btncard">Signin</button>
                            </div>

                        </form>
                    </div>  </div> 
</main> 
</body>
</html>