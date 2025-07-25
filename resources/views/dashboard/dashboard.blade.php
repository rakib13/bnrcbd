<!DOCTYPE html>
<html>

<head>
    @include('dashboard.head')
</head>

<body>
    <header>
        @include('dashboard.nav')
    </header>


    <!--Main layout-->
    <main style="margin-top: 58px">
        <!-- Content -->
        <div class="content" id="content">
            @yield('dashboard-content')
        </div>
    </main>
    <!--Main layout-->

</body>

</html>
