<?php $__env->startSection('page-title', 'Branches'); ?>

<?php $__env->startSection('breadcrumb'); ?>

  <span class="small-paragraph">Branches</span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

  <title>KDB | Branches</title>
  
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/branches.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  
  <section class="desctop container branches">
    <div class="row">
      <main class="col-xl-9 main-hero mb-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="local-branches-tab" data-toggle="tab" href="#local-branches" role="tab" aria-controls="local-branches" aria-selected="true">Local Branches</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#headquarter" role="tab" aria-controls="headquarter" aria-selected="false">Headquarter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="global-network-tab" data-toggle="tab" href="#global-network" role="tab" aria-controls="global-network" aria-selected="false">Global Network</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="local-branches" role="tabpanel" aria-labelledby="local-branches-tab">
            <div class="mt-4">

              <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row parent no-gutters">
                  <div class="col-lg-3">
                    <div class="image-parent h-100">
                      <img src="<?php echo e(Voyager::image( $branch->image )); ?>" class="img-cover">
                    </div>
                  </div>
                  <div class="col-lg-3 space-1">
                      <h5 class="heading-black"><?php echo e($branch->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale')); ?></h5>
                      <p><strong>Address:</strong> <?php echo e($branch->getTranslatedAttribute('address', app()->getLocale(), 'fallbackLocale')); ?></p>
                      <p><strong>Phone:</strong> <?php echo e($branch->phone); ?></p>
                      <p><strong>E-mail:</strong> <?php echo e($branch->email); ?></p>
                    </div>
                  <div class="col-lg-3 space-1">
                    <h5 class="heading-black">Working Hours</h5>
                    <p><?php echo $branch->getTranslatedAttribute('working_hours', app()->getLocale(), 'fallbackLocale'); ?></p>
                    <p><strong>Day off:</strong> <?php echo e($branch->getTranslatedAttribute('day_off', app()->getLocale(), 'fallbackLocale')); ?></p>
                  </div>
                  <div class="col-lg-3 space-2">
                    <h5 class="heading-black">Exchange Office Hours</h5>
                    <p><?php echo $branch->getTranslatedAttribute('exchange_hours', app()->getLocale(), 'fallbackLocale'); ?></p>
                    <?php if($branch->exchnage_off): ?>
                      <p><strong>Day off:</strong> <?php echo e($branch->getTranslatedAttribute('exchange_off', app()->getLocale(), 'fallbackLocale')); ?></p>
                    <?php endif; ?>
                  </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </div>
          </div>
          <div class="tab-pane fade" id="headquarter" role="tabpanel" aria-labelledby="headquarter-tab">
            <div class="row first-parent mt-4">
              <div class="col-lg-6 order-lg-1 order-2 helper-item">
                <h2 class="heading-2">Korea Development Bank</h2>
                <p class="paragraph">
                  KDB Bank is a wholly state-owned policy development bank in South Korea. It was founded in 1954 in accordance with The Korea Development Bank Act to finance and manage major industrial projects to expedite industrial development and enhance the national economy.
                </p>
                <p class="paragraph">
                  As Korea's representative development financing bank, ranked at 61st biggest bank globally(by the Banker 1,000 list in 2018), KDB has fostered the growth and heightened the competitiveness of strategic industries by meeting their changing financial needs.
                </p>
                <p class="paragraph">
                  Following public policy, KDB facilitates the management normalization of troubled companies through corporate restructuring and consulting services, and provides capital for strategic regional development projects.
                </p>
              </div>
              <div class="col-lg-6 order-lg-2 order-1">
                <img src="<?php echo e(asset('img/about-us/branches/2.1.png')); ?>" class=" img-1">
              </div>
            </div>
            <div class="row second-parent">
              <div class="col-12">
                <h3 class="heading-3">
                Credit Rating
                </h3>
              </div>
              <div class="col-md-4 item">
                <div class="box">
                  <img src="<?php echo e(asset('img/about-us/branches/2.2.png')); ?>">
                </div>
                <h6 class="heading-bold">
                Fitch : AA
                </h6>
                <p class="paragraph">
                  as of Dec 31, 2018
                </p>
              </div>
              <div class="col-md-4 item">
                <div class="box">
                  <img src="<?php echo e(asset('img/about-us/branches/2.3.png')); ?>">
                </div>
                <h6 class="heading-bold">
                Moody's  Aa2
                </h6>
                <p class="paragraph">
                  as of Dec 31, 2018
                </p>
              </div>
              <div class="col-md-4 item">
                <div class="box">
                  <img src="<?php echo e(asset('img/about-us/branches/2.4.png')); ?>">
                </div>
                <h6 class="heading-bold">
                S&P AA
                </h6>
                <p class="paragraph">
                  as of Dec 31, 2018
                </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="global-network" role="tabpanel" aria-labelledby="global-network-tab">
            <img src="<?php echo e(asset('img/about-us/branches/3.1.png')); ?>" class="d-block mt-4">
          </div>
        </div>
      </main>
      <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </section>
  

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User 5\Desktop\KDB Last\resources\views/about-us/branches.blade.php ENDPATH**/ ?>