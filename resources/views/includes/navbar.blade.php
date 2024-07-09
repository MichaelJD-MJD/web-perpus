<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-ku ps-3 pe-3">
    <div class="container-fluid">
        <a href="#" class="navbar-brand h1 me-lg-5">MLibrary</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="container navbar-container ms-lg-5">
                <form class="d-flex mb-sm-2 mt-sm-2 ms-lg-3" role="search">
                    <input type="search" class="form-control search-input" placeholder="Search for name or author ..."
                        aria-label="Search" />
                </form>
            </div>
            <ul class="navbar-nav ms-auto me-3 mb-2 mb-lg-0">
                <li class="nav-item dropdown ms-lg-auto me-3 d-flex">
                    @guest
                        {{-- Desktop Button --}}
                        <a href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 btn-login">
                            Login
                        </a>
                        <a href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 btn-register">
                            Register
                        </a>
                    @endguest

                    @auth
                        <div class="user-profile">
                            <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ url('frontend/images/profile.jpg') }}" width="40" height="40" alt=""
                                    class="rounded-circle" />
                                <span>{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                                <form action="{{ url('logout') }}" method="POST" class="form-inline">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Log out</button>
                                </form>
                            </ul>
                        </div>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
