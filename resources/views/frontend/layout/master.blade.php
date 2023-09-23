<!DOCTYPE html>
<html lang=en>
   <!-- Mirrored from html.merku.love/axial/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 18:26:18 GMT -->
   <head>
      <meta charset=UTF-8>
      <meta name=viewport content="width=device-width,initial-scale=1,minimum-scale=1">
      <meta http-equiv=X-UA-Compatible content="ie=edge">
      <title>@yield('title')</title>
      <link rel="stylesheet preload" as=style href={{asset('frontend')}}/css/preload.min.css>
      <link rel="stylesheet preload" as=style href={{asset('frontend')}}/css/icomoon.css>
      <link rel="stylesheet preload" as=style href={{asset('frontend')}}/css/libs.min.css>
      <link rel=stylesheet href={{asset('frontend')}}/css/index2.min.css>
      <link rel=stylesheet href={{asset('frontend')}}/css/floatbutton.min.css>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   </head>
   <body>
@include('frontend.layout.header')
     @yield('content')
@include('frontend.layout.footer')
      <button id=scrollTrigger type=button><i class="icon icon-arrow_right"></i></button><script id=www-widgetapi-script src=https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js async=""></script><script src=https://www.youtube.com/player_api></script><script src={{asset('frontend')}}/js/common.min.js></script><script src={{asset('frontend')}}/js/index2.min.js></script><script src={{asset('frontend')}}/js/demo.min.js></script><script async src="https://www.googletagmanager.com/gtag/js?id=undefined"></script><script>window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         gtag('config', 'undefined');
      </script>
   </body>
   
</html>