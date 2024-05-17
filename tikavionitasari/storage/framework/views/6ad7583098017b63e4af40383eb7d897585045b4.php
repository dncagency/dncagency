<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdmin')): ?>
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="<?php echo e(route('home')); ?>">SAID</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="<?php echo e(route('home')); ?>">SA</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="dropdown">
                    <a href="<?php echo e(route('home')); ?>" class="nav-link"><i
                            class="fas fa-fire"></i><span>Dashboard</span></a>
                </li>

                <li class="menu-header">MAIN MENU</li>

                <li class="dropdown">
                    <a href="<?php echo e(route('datauser')); ?>" class="nav-link "><i class="fas fa-th-large"></i> <span>Data
                            User</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                        <span>Pengajuan Surat</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?php echo e(route('sktm')); ?>">SKTM</a>
                        </li> 
                        <li><a class="nav-link" href="<?php echo e(route('slipgaji')); ?>">Slip Gaji</a>
                        </li> 
                        <li><a class="nav-link" href="#">Surat Domisili</a>
                        </li>
                        <li><a class="nav-link" href="#">Surat Pengantar KTP</a>
                        </li>
                        <li><a class="nav-link" href="#">Surat Akte Kelahiran</a>
                        </li>
                        <li><a class="nav-link" href="#">Surat Akte Kematian</a>
                        </li>
                        <li><a class="nav-link" href="<?php echo e(route('ijinusaha')); ?>">Surat Ijin Usaha</a>
                        </li>
                        <li><a class="nav-link" href="#">Surat Nikah</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="<?php echo e(route('informasi')); ?>" class="nav-link"><i class="fas fa-map-marker-alt"></i>
                        <span>Informasi</span></a>

                </li>

                <li class="dropdown">
                    <a href="<?php echo e(route('aspirasi')); ?>" class="nav-link "><i class="fas fa-plug"></i>
                        <span>Aspirasi</span></a>

                </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isUser')): ?>
                <div class="main-sidebar sidebar-style-2">
                    <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <a href="<?php echo e(route('home')); ?>">SAID</a>
                        </div>
                        <div class="sidebar-brand sidebar-brand-sm">
                            <a href="<?php echo e(route('home')); ?>">SA</a>
                        </div>
                        <ul class="sidebar-menu">
                            <li class="menu-header">Dashboard</li>
                            <li class="dropdown">
                                <a href="<?php echo e(route('home')); ?>" class="nav-link"><i
                                        class="fas fa-fire"></i><span>Dashboard</span></a>
                            </li>

                            <li class="menu-header">MAIN MENU</li>


                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                                    <span>Pengajuan Surat</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="<?php echo e(route('pengajuansktm')); ?>">SKTM</a>
                                    </li>
                                    <li><a class="nav-link" href="<?php echo e(route('pengajuanslipgaji')); ?>">Slip Gaji</a>
                                    </li>
                                    <li><a class="nav-link" href="#">Surat Domisili</a>
                                    </li>
                                    <li><a class="nav-link" href="#">Surat Pengantar KTP</a>
                                    </li>
                                    <li><a class="nav-link" href="#">Surat Akte Kelahiran</a>
                                    </li>
                                    <li><a class="nav-link" href="#">Surat Akte Kematian</a>
                                    </li>
                                    <li><a class="nav-link" href="<?php echo e(route('pengajuanijinusaha')); ?>">Surat Ijin Usaha</a>
                                    </li>
                                    <li><a class="nav-link" href="#">Surat Nikah</a>
                                    </li> 
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="<?php echo e(route('informasi_user')); ?>" class="nav-link"><i
                                        class="fas fa-map-marker-alt"></i>
                                    <span>Informasi</span></a>

                            </li>
                            <li class="dropdown">
                                <a href="<?php echo e(route('kirimaspirasi')); ?>" class="nav-link "><i
                                        class="fas fa-plug"></i> <span>Aspirasi</span></a>

                            </li>
                        <?php endif; ?>
                        
                    </ul>

                    
                </aside>
            </div>
<?php /**PATH C:\xampp\htdocs\said-master\resources\views/components/dcore/sidebar.blade.php ENDPATH**/ ?>