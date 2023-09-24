<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="sm-hover" data-preloader="disable" data-bs-theme="light">

<head>
   <meta charset="utf-8">
    <title>Dashboard | Vixon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.header')
    @vite('resources/js/app.js')
</head>
<body>
@include('partials.sidebar')
@include('partials.navbar')
<div id="layout-wrapper">

                        <div id="content">
                            @yield('contenu') 
                        </div>
                       
                       @include('partials.footer')
</div>
</div>                  
</body>
 @include('partials.jquery') 
</html>

