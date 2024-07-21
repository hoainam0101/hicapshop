<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Include CSS files here -->

    @yield('admin-page-css')
    @include('inc.admin.css')
</head>

<body>

    <div class="main-wrapper">
        <div class="page-wrapper">
            @include('inc.admin.header')
        </div>
        <section class="page-breadcrumbs container">
            @include('inc.admin.breadcrumbs')
        </section>
        <section class="page-content container">
            @yield('admin-content')
        </section>

    </div>




    <!-- Include JS files here -->
    @include('inc.admin.js')
    @yield('admin-page-js')
</body>

</html>
