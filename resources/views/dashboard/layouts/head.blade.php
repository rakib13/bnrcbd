<meta charset="utf-8">
<title>BNRC - Bangladesh Nationalist Research Centre</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">

<link rel="icon" type="image/png" href="{{ asset('/img/favicon/favicon-96x96.png') }}" sizes="96x96" />


<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap"
    rel="stylesheet">

<!-- Icon Font Stylesheet -->
{{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" /> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link rel="stylesheet" href="/lib/animate/animate.min.css" />
<link href="{{ asset('/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


<!-- Customized Bootstrap Stylesheet -->
<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">

{{-- Include a CSS/JS library for popups, e.g., SweetAlert2, or write custom CSS/JS --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
    body {
        padding-top: 56px;
        /* Adjust for fixed top navbar */
    }

    .sidebar {
        position: fixed;
        top: 80px;
        /* Height of the navbar */
        left: 0;
        height: 100%;
        width: 180px;
        background-color: #343a40;
        color: white;
        transition: all 0.3s;
        padding-top: 20px;
        padding-left: 10px;
    }

    .sidebar.collapsed {
        width: 60px;
    }

    .sidebar .nav-link {
        color: #ddd;
    }

    .sidebar .nav-link:hover {
        color: #fff;
        background-color: #495057;
    }

    .content {
        margin-left: 190px;
        transition: all 0.3s;
        padding: 10px;
    }

    .content.collapsed {
        margin-left: 60px;
    }
</style>
