<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <h3 class="nav-link active" aria-current="page">Halaman Admin</h3>
                </li>

            </ul>

        </div>
    </div>
</nav>


<main>
    <header class="pt-2">
        <div class="container">
            <header class="d-flex justify-content-center py-3">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="?p=dashboard" class="nav-link" aria-current="page">Home &nbsp &nbsp &nbsp</a></li>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-primary" href="#" data-bs-toggle="dropdown">
                                Data
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light">
                                <li><a class="dropdown-item" href="?p=user_data">Data User</a></li>
                                <li><a class="dropdown-item" href="?p=jenis_data">Data Jenis PMKS</a></li>
                                <li><a class="dropdown-item" href="?p=subjek_data">Data Subject</a></li>
                                <li><a class="dropdown-item" href="?p=pmks_data">Data PMKS</a></li>
                                <li><a class="dropdown-item" href="?p=tindakan_data">Data Tindakan</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-primary" href="#" data-bs-toggle="dropdown">
                                &nbsp &nbsp &nbsp Laporan Data
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light">
                                <li><a class="dropdown-item" href="">Laporan Data User</a></li>
                                <li><a class="dropdown-item" href="">Laporan Data PMKS</a></li>
                                <li><a class="dropdown-item" href="">Laporan Data Tindakan</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-primary" href="#" data-bs-toggle="dropdown">
                                &nbsp &nbsp &nbsp Rekapitulasi Data
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light">
                                <li><a class="dropdown-item" href="">Grafik Batang Data PMKS</a></li>
                                <li><a class="dropdown-item" href="">Dashboard Data Faktor</a></li>
                            </ul>
                        </li>
                    </ul>

                    <li class="nav-item"><a href="../logout.php" class="nav-link"> &nbsp &nbsp &nbsp Logout</a></li>
                </ul>
            </header>
        </div>
    </header>
</main>
<hr>