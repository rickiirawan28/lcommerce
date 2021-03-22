<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>

            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                @auth
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="badge bg-success">{{$countItems}}</span>
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="nav-link">Register</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
