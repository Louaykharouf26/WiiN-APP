<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WiiN</title>
        <link rel="icon" type="image/png" href="/img/WiiN.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  
  <link href="/css/main2AR.css" rel="stylesheet">
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
<body dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">
<div class="box">
<select onchange="changeLanguage(this.value)" id="lang" class="btn">
            <option {{session()->has('lang_code')?(session()->get('lang_code')=='en'?'selected':''):''}} value="en">English</option>
            <option {{session()->has('lang_code')?(session()->get('lang_code')=='ar'?'selected':''):''}} value="ar">عربي</option>
        </select>
<img id="logo" src="/img/WiiN.png" alt="WiiN Logo"></img>
<p class="sign">@lang('message.uforget') <br/> 
   <span class="account">@lang('message.psswd')</span>
</p>
<p class="signdesc">@lang('message.passwdtxt')</p>
<img id="Saly" src="/img/Saly.png" alt="WiiN Logo"></img>
</div>

    @yield('content')
</body>
<footer>
    @yield('foot')
</footer>