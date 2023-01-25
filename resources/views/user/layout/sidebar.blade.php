<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('storage/assets/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('storage/assets/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.dashboard') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('storage/vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                </svg>
                Dashboard
            </a>
        </li>
        <li class="nav-title">Manage</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.peminjaman') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('storage/vendors/@coreui/icons/svg/free.svg#cil-newspaper') }}"></use>
                </svg>
                Peminjaman
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.pengembalian') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('storage/vendors/@coreui/icons/svg/free.svg#cil-folder') }}"></use>
                </svg>
                Pengembalian
            </a>
        </li>
        <li class="nav-title">Reporting</li>
        <li class="nav-item">
            <a class="nav-link" href="user.pesan">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('storage/vendors/@coreui/icons/svg/free.svg#cil-star') }}"></use>
                </svg>
                Pesan
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="user.profil">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('storage/vendors/@coreui/icons/svg/free.svg#cil-speech') }}"></use>
                </svg>
                Profil
            </a>
        </li>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>

