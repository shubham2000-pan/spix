<!DOCTYPE html>
<html>
    @include('layouts.admin.header')
    @yield('internal_css')
<body>
    @include('layouts.admin.navbar')
    @include('layouts.admin.sidebar')
    @yield('content')
    @include('layouts.admin.footer')
    @yield('footer_script')	
</body>

</html>