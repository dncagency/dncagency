<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dcore.head','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dcore.head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dcore.nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dcore.nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dcore.sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dcore.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <div class="main-content">
            <section class="section">
                

                <!-- MAIN OF CENTER CONTENT -->
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdmin')): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Dashboard Admin</h4>
                                </div>
                                <div class="card-body">


                                    <div class="row">

                                        <div class="col-md-4 col-sm-12 mb-3">
                                            <div class="card bg-dark">
                                                

                                                <div class="card-body">
                                                    <img src="<?php echo e(asset('dashboard/user.png')); ?>" class="card-img-top"
                                                        alt="...">
                                                    <div class="card-title">
                                                        <h4><?php echo e($datauser); ?></h4>
                                                    </div>
                                                    Data User
                                                </div>

                                                <div class="card-footer">
                                                    <a href="<?php echo e(route('datauser')); ?>"
                                                        class="card-link">Selengkapnya.</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 mb-3">
                                            <div class="card bg-success">
                                                

                                                <div class="card-body">
                                                    <img src="<?php echo e(asset('dashboard/pengajuan.png')); ?>"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-title">
                                                        <h4><?php echo e($sktm); ?></h4>
                                                    </div>
                                                    Pengajuan SKTM
                                                </div>

                                                <div class="card-footer">
                                                    <a href="<?php echo e(route('sktm')); ?>" class="card-link">Selengkapnya.</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 mb-3">
                                            <div class="card bg-danger">
                                                

                                                <div class="card-body">
                                                    <img src="<?php echo e(asset('dashboard/pengajuan.png')); ?>"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-title">
                                                        <h4><?php echo e($slipgaji); ?></h4>
                                                    </div>
                                                    Pengajuan Keterangan Slip Gaji
                                                </div>

                                                <div class="card-footer">
                                                    <a href="<?php echo e(route('slipgaji')); ?>"
                                                        class="card-link">Selengkapnya.</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 mb-3">
                                            <div class="card bg-danger">
                                                

                                                <div class="card-body">
                                                    <img src="<?php echo e(asset('dashboard/informasi.png')); ?>"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-title">
                                                        <h4><?php echo e($informasi); ?></h4>
                                                    </div>
                                                    Informasi
                                                </div>

                                                <div class="card-footer">
                                                    <a href="<?php echo e(route('informasi')); ?>"
                                                        class="card-link">Selengkapnya.</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 mb-3">
                                            <div class="card bg-warning">
                                                

                                                <div class="card-body">
                                                    <img src="<?php echo e(asset('dashboard/aspirasi.png')); ?>"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-title">
                                                        <h4><?php echo e($aspirasi); ?></h4>
                                                    </div>
                                                    Aspirasi
                                                </div>

                                                <div class="card-footer">
                                                    <a href="<?php echo e(route('aspirasi')); ?>"
                                                        class="card-link">Selengkapnya.</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isUser')): ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Dashboard User</h4>
                                                </div>
                                                <div class="card-body">


                                                    <div class="row">
                                                        <h3>Selamat Datang <?php echo e(Auth::user()->name); ?>.</h3>
                                                        <img src="<?php echo e(asset('dashboard/alurpengajuan.png')); ?>"
                                                            class="card-img-top" alt="...">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- END OF CENTER CONTENT -->


            </section>
        </div>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dcore.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dcore.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
</div>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dcore.script','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dcore.script'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\said-master\resources\views/Dashboard/index.blade.php ENDPATH**/ ?>