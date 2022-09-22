<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
        </ul>

        <h6
            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Reference</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link
                {{ strpos(Route::current()->getName(), 'unit_kerja.') !== false ? 'bg-primary text-light rounded' : '' }}
                "
                    href="{{ route('unit_kerja.index') }}">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Unit Kerja
                </a>
            </li>
            <li
                class="nav-item
            {{ strpos(Route::current()->getName(), 'jabatan.') !== false ? 'bg-primary text-light rounded' : '' }}">
                <a class="nav-link" href="{{ route('jabatan.index') }}">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Jabatan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Pegawai
                </a>
            </li>
        </ul>
        <h6
            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Transaction</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Cuti Pegawai
                </a>
            </li>
        </ul>
    </div>
</nav>
