<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<!-- 语言 -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- //csrf-token 标签是为了方便前端的 JavaScript 脚本获取 CSRF 令牌 -->

  <title>@yield('title', 'LaraBBS') - Laravel 进阶教程</title>

  <!-- //@yield('title', 'LaraBBS') 继承此模板的页面，如果没有定制 title 区域的话，就会自动使用第二个参数 LaraBBS 作为标题前缀 -->


  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>

<body>
  <div id="app" class="{{ route_class() }}-page">

  <!-- //route_class() 是我们自定义的辅助方法，我们还需要在 helpers.php 文件中添加此方法： -->

    @include('layouts._header')

    <div class="container">
    <!-- 占位符声明，允许继承此模板的页面注入内容。 -->
      @include('shared._messages')

      @yield('content')

    </div>

    @include('layouts._footer')
  </div>

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>