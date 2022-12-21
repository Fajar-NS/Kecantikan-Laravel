<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="/">Next Cosmetic</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        
        <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard-user"><i class="bi bi-window"></i> My Dasboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">
                    <i class="bi bi-box-arrow-right"></i> Logout</a>
                </button>
                </form>
            </ul>
        </li>
            @else
            <li class="nav-item">
            <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}">Login</a>
            </li>
            <li class="nav-item">
            <a href="/register" class="nav-link {{ ($active === "registrasi") ? 'active' : '' }}">Registrasi</a>
        </li>
        @endauth
    </ul>
        
    </div>
    </div>
</nav>