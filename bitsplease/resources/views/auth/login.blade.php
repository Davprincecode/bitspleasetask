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

<div class="header">
    <h1>were glad you came</h1>
    <p>dont wait any longer, login</p>
</div>
                
                 <div class="cardcontainer">
                    <div class="card">
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
                        <div class="alternative">
  <div class="righthand"></div>
  <p>alternative</p>
  <div class="lefthand"></div>
                    </div>

                      <div class="googlecontainer">
                          <div class="googleimg">
                              <img src="{{asset('/image/google.png')}}" alt="">
                          </div>
                          <p>continue with google</p>
                      </div>
                    
                    <div class="fellow">
                        <p style="margin-bottom:10px;">Not yet a fellow <a href="{{ route('register-user') }}" style="font-weight: bold;font-size: 18px;
                        text-transform: capitalize;
                         ">join us</a></p>
                        <p><a href="" style="font-size: 18px;
                        text-transform: capitalize;
                         ">forgot password?</a></p>
                    </div>
                    </div>
        </div>
</main> 
</body>
</html>