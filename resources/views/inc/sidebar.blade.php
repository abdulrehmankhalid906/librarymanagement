<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('home') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Book Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('books.index') }}">Books</a>
                        <a class="nav-link" href="{{ route('orders.index') }}">Orders</a>
                    </nav>
                </div>

                <div class="sb-sidenav-menu-heading">Authurization</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#userlayouts" aria-expanded="false" aria-controls="userlayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    User Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="userlayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
                        <a class="nav-link" href="{{ route('permissions.index') }}">Permissions</a>
                        <a class="nav-link" href="{{ route('users.index') }}">Users</a>
                    </nav>
                </div>

                <div class="sb-sidenav-menu-heading">Adjust Theme</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#themesetting" aria-expanded="false" aria-controls="themesetting">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Theme Settings
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="themesetting" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('theme') }}">General Options</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ Auth::user()->name ?? 'Guest' }}
        </div>
    </nav>
</div>
