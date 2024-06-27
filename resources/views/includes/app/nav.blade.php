<nav
    class="main-header navbar navbar-expand navbar-white navbar-light"
>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a
                class="nav-link"
                data-widget="pushmenu"
                href="#"
                role="button"
                ><i class="fas fa-bars"></i
            ></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
            </a>
            <div
                class="dropdown-menu dropdown-menu-nav dropdown-menu-sm dropdown-menu-right"
            >
                <div class="dropdown-item dropdown-item-profile">
                    <span class="d-block">{{ 'auth()->user()->nama' }}</span>
                    <span class="text-muted">{{ 'auth()->user()->email' }}</span>
                </div>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    Profile
                </a>
                <a href="#" class="dropdown-item">
                    Setting
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>