    <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top">
        <div class="container">
            <!-- Toggle button -->
            {{-- <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                    aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button> --}}

            <a class="navbar-brand" href="#">
                <img src="./img/nav-logo.png" height="60px" alt="Logo BNRC">
            </a>
            <div class="ms-auto d-flex align-items-center">
                <span class="text-dark me-3">Welcome, {{ Auth::user()->full_name ?? 'User' }}</span>
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
                <a class="nav-link" href="{{ url('/add-book') }}">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Add Book
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                    Update
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Delete</a>
            </li>
        </ul>
    </div>
