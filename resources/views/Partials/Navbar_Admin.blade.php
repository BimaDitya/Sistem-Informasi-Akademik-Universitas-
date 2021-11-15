<nav class="navbar navbar-light shadow-sm" style="background: #3399FF;">
    <div class="container-lg px-4">
        <a class="navbar-brand highlight-font" style="color: #FFFFFF">Admin: {{ $Title }}</a>
        <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="btn ph-list-bold"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background: #EBF5FF">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title highlight-font" id="offcanvasNavbarLabel">Menu Navigasi</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body highlight-font">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item mx-2">
                        <a class="nav-link {{ ($Title === 'Mahasiswa') ? 'active fw-bold' : '' }}"
                            href="/Admin/Mahasiswa"><i class="ph-student-bold align-middle pe-3"></i>Mahasiswa</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link {{ ($Title === 'Perkuliahan') ? 'active fw-bold' : '' }}"
                            href="/Admin/Perkuliahan"><i class="ph-notebook-bold align-middle pe-3"></i>Perkuliahan</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link {{ ($Title === 'Transkrip Nilai') ? 'active fw-bold' : '' }}"
                            href="/Admin/Transkrip"><i class="ph-chart-bar-bold align-middle pe-3"></i>Transkrip Nilai</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link {{ ($Title === 'Informasi UKT') ? 'active fw-bold' : '' }}" href="/Admin/Pembayaran"><i
                                class="ph-wallet-bold align-middle pe-3"></i>Informasi
                            UKT</a>
                    </li>
                    <li class="nav-item mx-2">
                        <form action="/Logout" method="POST">
                            @csrf
                            <a type="submit" class="nav-link"><i class="ph-arrow-bend-down-right-bold align-middle pe-3"></i>Logout</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>