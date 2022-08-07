<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

    <div class="wrapper">
        @include('layouts.preloader')


        @include('layouts.header')

        @yield('hero')
        @yield('page-title')
        @yield('content')

        

        @include('layouts.footer')


    </div>

    @include('layouts.js')
    @yield('script')

</body>

</html>
