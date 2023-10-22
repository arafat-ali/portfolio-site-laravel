<!DOCTYPE html>
<html lang="en">

<head>
  @include('website.includes.head')
</head>

<body>

    @include('website.includes.header')
    <section class="home">
         @yield('content')
    
        
     @include('website.includes.footer')
  </section>

</body>

</html>