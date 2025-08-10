<!DOCTYPE html>
<html>

<head>
    @include('dashboard.layouts.head')
</head>

<body>
    <header>
        @include('dashboard.layouts.nav')
    </header>


    <!--Main layout-->
    <main style="margin-top: 58px">
        <!-- Content -->
        <div class="content" id="content">
            @yield('dashboard-content')
        </div>
    </main>
    <!--Main layout-->

    {{-- Sweet Alert message --}}
    <script>
        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: '{{ session('error') }}',
            });
        @endif
        
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
            });
        @endif
    </script>
</body>

</html>
