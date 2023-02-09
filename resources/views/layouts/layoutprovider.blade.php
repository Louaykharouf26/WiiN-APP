<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WiiN</title>
        <link rel="icon" type="image/png" href="/img/WiiN.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">

  
  <link href="/css/mainP.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
    
    function changeLanguage(lang){
        window.location='{{url("change-language")}}/'+lang;
    }
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!--<script type="text/javascript" src="/js/functions.js'"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
</head>
<body >

<nav class="nav">
  <img id="logo" src="/img/wiinlogo1.png" alt="WiiN Logo"></img>
  <hr class="hrbx" >
  <!--<select onchange="changeLanguage(this.value)" id="lang" class="btn">-->
    <div id="lang">
            <a href="#" onclick="changeLanguage(this.value)" {{session()->has('lang_code')?(session()->get('lang_code')=='en'?'selected':''):''}} value="en" id="EN">EN</a>
            <a href="#" onclick="changeLanguage(this.value)" {{session()->has('lang_code')?(session()->get('lang_code')=='ar'?'selected':''):''}} value="ar" id="AR">AR</a>
            </div>
            <!--</select>-->
        <div class="navbar-nav" id="gauche">
                <a href="{{ url('/contactus') }}" class="nav-item nav-link active" id="contact" >Contact Us</a>
                <a href="#" class="nav-item nav-link " type="button" id="help">Help</a>
                <a href="#" class="nav-item nav-link " type="button" id="faq">FAQs</a>

            </div>
            <div class="container-fluid" >
            <div class="dropdown" id="filter">
  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    Gabes
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
    <form class="d-flex">
        
      <input class="form-control me-2 search" type="search" placeholder="Searching for ..." aria-label="Search"> 
      <button class="btn btn-primary submitbtn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
  </div>
<a class="prof" href="{{ url('/logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
<a class="saved" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> Saved</a>
</nav>



    @yield('content')
    @yield('content1')
    @yield('contentmessage')
    @yield('profile')
    @yield('works')
    @yield('workdetails')
</body>
<footer>
    @yield('foot')
</footer>