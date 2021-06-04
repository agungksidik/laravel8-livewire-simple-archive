<div>
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
            <a class="navbar-brand brand-logo" href="/dashboard"><img src="/images/logo.svg" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="/dashboard"><img src="/images/logo-mini.svg" alt="logo"/></a>
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
            </button>
        </div>  
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
            <li class="nav-item nav-search d-none d-lg-block w-100">
                <span class="nav-profile-name">Sistem Informasi Manajemen Arsip</span>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="/images/faces/face5.jpg" alt="profile"/>
                <span class="nav-profile-name">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
                </a>
                <a class="dropdown-item" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                    <form action="/logout" method="post" id="logout-form">@csrf</form>
                    <i class="mdi mdi-logout text-primary"></i>
                    Logout
                </a>
            </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
        </div>
    </nav>
</div>