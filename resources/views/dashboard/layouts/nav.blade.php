    <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/img/nav-logo.png" height="60px" alt="Logo BNRC">
            </a>
            <div class="ms-auto d-flex align-items-center">
                <span class="text-dark me-3">Welcome, {{ Auth::user()->user_name ?? 'User' }}</span>
                {{-- <button class="btn btn-danger btn-md">Logout</button> --}}
                <form action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-danger btn-md" type="submit">
                        <i class="fas fa-sign-in-alt text-white"></i>
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="sidebar" id="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard') }}">
                    <i class="fas fa-inbox"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <hr>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/all-publish') }}">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    All Publish
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/add-publish') }}">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Add Publication
                </a>
            </li>
            <li>
                <hr>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/all-leadership') }}">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    Leadership Post
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/add-leadership') }}">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Leadership Post Add
                </a>
            </li>
            @if (Auth::user()->role == 'admin')
                <li>
                    <hr>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/user-list') }}">
                        <i class="fas fa-users" aria-hidden="true"></i>
                        User List
                    </a>
                </li>
                                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/create-user') }}">
                        <i class="fas fa-users" aria-hidden="true"></i>
                        User Create
                    </a>
                </li>
            @endif
        </ul>
    </div>
