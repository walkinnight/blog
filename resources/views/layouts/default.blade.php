<html>
<head>
    <title>@yield('title', 'Weibo App') - 博客</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
@include('layouts._header')

<div class="container">
   <div class="offset-md-1 col-md-10">
       @include('shared._message')
       @yield('content')
       @include('layouts._footer')
   </div>
</div>
</body>
<script src="{{ mix('js/app.js') }}"></script>
</html>