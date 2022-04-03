<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <title>BitsPlease</title>
</head>
<body>
    <header>
        <nav>
           <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">BitPlease</a>
        <a href="#">Join us</a>
        <a href="#">Sign in</a>
        <a href="#">Product Management</a>
        <a href="#">Product Design</a>
        <a href="#">UI/UX design</a>
        <a href="#">Front-End Development</a>
        <a href="#">Back-End Development</a>
      </div>
      <div id="main">
      </div>
            <ul>
                <li>
                    <h1>Bits<span onclick="openNav()">Please</span></h1>
                </li>
                <div class="rightnav">
                <li class="rm">FAQ</li>
                <li><button>Join us</button></li>
            </div>
            </ul>
        </nav>
    </header>
<!-- =========nav end============== -->
<div class="mobileimgcontainer">
    <img src="{{asset('/image/image.png')}}" alt="">
</div>
    <div class="container">
        <div class="container-text">
            <h2>
                Transition into the world of IT easily with Us.
            </h2>
            <p class="text-p">
                We have a step-by-step guide, dedicated mentors, curious learners and resources to help you achieve your goals.
            </p>
            <nav class="btn">

                <div class="sig">
        <a href="{{ route('login') }}" > sign in</a></div>
        <div class="reg">
                <a href="{{ route('register-user') }}">join us now</a>
            </div>
            </nav>
            <div class="chat">
                <div class="chat-img">
                    <img src="" alt=""></div>
                <p>We know you want to chat, what is it about?</p>
            </div>
        </div>
        <div class="container-img">
            <div class="img-group">
                <img src="HeroSection.png" alt="">
            </div>
            <div class="imgcontainer">
            <img src="{{asset('/image/image.png')}}" alt="">
</div>
        </div>
    </div>




<script>
 function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
function signIn() {
    document.querySelector('.containersignin').style.display = "block";
}
function signUp() {
    document.querySelector('.containersignup').style.display = "block";
}
function closeForm() {
    document.querySelector('.containersignin').style.display ="none";
}
function closeFormsignup(){
    document.querySelector('.containersignup').style.display ="none";
}
</script>
</body>
</html>