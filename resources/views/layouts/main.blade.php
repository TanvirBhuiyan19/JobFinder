<!DOCTYPE html>
<html lang="en">
    <head>
        @yield('title')
        @include('../includes.head')
    </head>
    <body>
       @include('../includes.nav') 
       
       @yield('content')
       
       @include('../includes.footer')
    </body>
</html>