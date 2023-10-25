<!DOCTYPE html>
<html lang="en">

  <head>
    @include('website.includes.head')
  </head>

  <body>

    @include('website.includes.header')
    
    <section class="{{Request::path() == '/' ? 'home' : 'others'}}">
          
      @yield('content')  
      
    </section>
    @include('website.includes.footer')

  </body>

</html>