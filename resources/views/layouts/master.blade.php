<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Include CSS files here -->

    @yield('page-css')
    @include('../inc.css')
</head>

<body>

    <section class="asideRight">
        @include('inc.asideRight')
    </section>


    <main class="dashboard-main">
        @include('inc.header')
        <div class="dashboard-main-body">
            <section>
                @yield('content')
            </section>

        </div>

    </main>




    <!-- Include JS files here -->
    @include('../inc.js')
    @yield('page-js')
</body>

</html>
