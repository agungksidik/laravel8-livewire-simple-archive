<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">    
    <li class="nav-item">
        <a class="nav-link" href="/dashboard">
        <i class="mdi mdi-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
        </a>
    </li>
    {{-- <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="mdi mdi-book-multiple menu-icon"></i>
        <span class="menu-title">Kategori</span>
        </a>
    </li> --}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('document.index') }}">
        <i class="mdi mdi-book-open menu-icon"></i>
        <span class="menu-title">Dokumen</span>
        </a>
    </li>    
    {{-- @hasanyrole($roles)
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi mdi-account-key menu-icon"></i>
            <span class="menu-title">Roles & Permissions</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('roles.index') }}">Roles</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Permissions</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Assign Permissions</a></li>
            </ul>
            </div>
        </li>
    @endhasanyrole  --}}
    {{-- <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
        <span class="menu-title">Documentation</span>
        </a>
    </li> --}}
    </ul>
</nav>
