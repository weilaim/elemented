<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'LaraBBS') - Laravel 进阶教程</title>
    <title>开始使用layui</title>
  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">



</head>
<body>
<div  class="{{ route_class() }}-page">

  @include('layouts._header')

  <div class="container">

    @include('shared._messages')

    @yield('content')

  </div>

  @include('layouts._footer')
</div>



<script src="{{asset('layui/layui.js')}}"></script>


</body>
</html>


<script>
    //注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function(){
        var element = layui.element;

        //…
    });
</script>
