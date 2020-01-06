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
    <link rel="stylesheet" href="{{asset('amazeui/dist/css/amazeui.css')}}"/>
    <link rel="stylesheet" href="{{asset('amazeui/dist/css/common.min.css')}}"/>
    <link rel="stylesheet" href="{{'amazeui/dist/css/index.min.css'}}"/>


</head>
<body>
{{--route_class() 是我们自定义的辅助方法，我们还需要在 helpers.php 文件中添加此方法：--}}
{{--app/helpers.php--}}
<div class="{{ route_class() }}-page">
    {{------------------------------------------}}
    <div class="layout">
        <!--===========layout-header================-->
        <div class="layout-header am-hide-sm-only">
            <!--topbar start-->
            @include('layouts._header')
            <!--topbar end-->
            <div class="header-box" data-am-sticky>
                <!--nav start-->
                @include('layouts._nav')
                <!--nav end-->
            </div>
        </div>

        <!--mobile header start-->
        @include('layouts._mobile_header')
        {{-- mobile header end--}}

        <!--===========layout-container================-->
        @include('shared._messages')

        @yield('content')

        @include('layouts._footer')
    </div>
    {{--  --------------------------------------}}

</div>
</body>
</html>

<script src="{{asset('layui/layui.js')}}"></script>
<script src="{{asset('amazeui/dist/js/jquery-2.1.0.js')}}"></script>
<script src="{{asset('amazeui/dist/js/amazeui.js')}}"></script>
<script src="{{asset('amazeui/dist/js/common.js')}}"></script>


<script>
    //注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function () {
        var element = layui.element;
    });
</script>
