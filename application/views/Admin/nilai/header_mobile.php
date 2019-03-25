        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo base_url()?>images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a class="js-arrow" href="#">
                            <a href="<?php echo base_url()?>index.php/Admin"><i class="zmdi zmdi-account"></i>Daftar Guru</a>
                        </li>
                        <li class="active has-sub">
                            <a href="<?php echo base_url()?>index.php/Nilai">
                                <i class="fas fa-chart-bar"></i>Daftar Nilai</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-account"></i>Daftar Murid</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo base_url()?>index.php/Murid">Semua Kelas</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>index.php/Murid/X">Kelas X</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>index.php/Murid/XI">Kelas XI</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>index.php/Murid/XII">Kelas XII</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Laporan</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo base_url()?>index.php/Laporan/guru">Guru</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>index.php/Laporan">Murid</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>index.php/Laporan/nilai">Nilai</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>