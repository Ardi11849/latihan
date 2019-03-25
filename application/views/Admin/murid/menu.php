        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url()?>images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="#">
                            <a href="<?php echo base_url()?>index.php/Admin"><i class="zmdi zmdi-account"></i>Daftar Guru</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>index.php/Nilai">
                                <i class="fas fa-chart-bar"></i>Daftar Nilai</a>
                        </li>
                        <li class="active has-sub">
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
                        <li class="has-sub">
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
                </nav>
            </div>
        </aside>