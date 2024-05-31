<!DOCTYPE html>
<html lang="en">

@include('layouts.header')
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layouts.navebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
    @include('layouts.sidebar')
     {{-- @include('layouts.sidebar') --}}
      <div class="main-panel">
          @yield('content')
          @include('layouts.footer')
      </div>
     </div>
</body>

</html>

