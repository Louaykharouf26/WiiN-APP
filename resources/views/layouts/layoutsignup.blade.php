<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WiiN</title>
        <link rel="icon" type="image/png" href="/img/WiiN.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link href="/css/main.css" rel="stylesheet">
  <link href="/css/main1.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!--<script type="text/javascript" src="/js/functions.js'"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <script>
    function showIconeV(){
  document.getElementById('checkiconV').style.visibility='visible';
  document.getElementById('checkiconM').style.visibility='hidden';
}
function showIconeM(){
  document.getElementById('checkiconM').style.visibility='visible';
  document.getElementById('checkiconV').style.visibility='hidden';
}
  </script>
   <script>
    
    function changeLanguage(lang){
        window.location='{{url("change-language")}}/'+lang;
    }
    </script>
</head>
<body >
<div class="box">
<select onchange="changeLanguage(this.value)" id="lang" class="btn">
            <option {{session()->has('lang_code')?(session()->get('lang_code')=='en'?'selected':''):''}} value="en">English</option>
            <option {{session()->has('lang_code')?(session()->get('lang_code')=='ar'?'selected':''):''}} value="ar">عربي</option>
        </select>
<img id="logo" src="/img/WiiN.png" alt="WiiN Logo"></img>
<p class="sign">Sign Up to <br/> 
   <span class="account">Our Website </span>
</p>
<p class="signdesc">Create an account and discover the potential of the services you use. Your account gives you more options by personalizing your experience and giving you easy access to your most important information.</p>
<img id="Saly" src="/img/Saly.png" alt="WiiN Logo"></img>
</div>

<p id="logas">Login as</p>
    <a class="btn  user1" href="#" role="button">
    <i class="fa fa-times-circle-o" aria-hidden="true"></i>
        <img id="ellipse" src="/img/Ellipse3.png" alt="WiiN Logo"></img>
    <p class="name">John Peter</pc>
    <p class="activesince">Active 1 days ago</p></a>
    <a class="btn  user2" href="#" role="button">
    <i class="fa fa-times-circle-o" aria-hidden="true"></i>
        <img id="ellipse" src="/img/Ellipse4.png" alt="WiiN Logo"></img>
    <p class="name">Alina shmen</pc>
    <p class="activesince">Active 4 days ago</p></a>

    @yield('content')
</body>
<footer>
    @yield('foot')
</footer>