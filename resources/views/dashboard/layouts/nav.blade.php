    <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/img/nav-logo.png" height="60px" alt="Logo BNRC">
            </a>
            <div class="ms-auto d-flex align-items-center">
                <span class="text-dark me-3">Welcome, {{ Auth::user()->user_name ?? 'User' }}</span>
                {{-- <button class="btn btn-danger btn-md">Logout</button> --}}
                <form action="{{ route('logout') }}" method="POST">
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
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/all-publish') }}">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    All Book
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/add-publish') }}">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Add Book
                </a>
            </li>
        </ul>
    </div>
