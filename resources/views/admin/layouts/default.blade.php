<!DOCTYPE html>

<html lang="en">
<head>
  @include('admin/layouts/head', array('title'=> 'Admin'))
</head>

<body>
    <div class="main-wrapper" id="main-wrapper">

        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Material Admin</p>
            </div>
        </div>


    @include('admin.layouts.header')
    @yield('content')


    </div>
    @yield('scripts_default')
    @yield('scripts')
</body>
</html>
