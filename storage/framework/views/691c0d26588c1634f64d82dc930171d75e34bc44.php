<?php $__env->startSection('page-title', 'Awards'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Awards</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Awards</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/awards.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container awards">
        <div class="row">
            
            <main class="col-xl-9 main-hero ">
                <div>
                    <div class="card-custom">
                        <div class="row m-0">
                            <div class="col-md-3 p-0">
                                <img class="card-img" src="<?php echo e(asset('img/about-us/awards/card-img-1.png')); ?>">
                            </div>
                            <div class="col-md-9 p-4 d-flex flex-column justify-content-between">
                                <div>
                                    <h3 class="heading-3">Awarding of JSC “KDB Bank Uzbekistan”</h3>
                                    <p class="small-paragraph">
                                        Awarding of JSC “KDB Bank Uzbekistan” in the nomination "The best bank in support of foreign
                                        investors in Uzbekistan”
                                    </p>
                                </div>
                                <button class="card-custom-toggler" data-target-id="1">
                                    read more
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="opener-info" id="1">
                        <div class="row">
                            <div class="col-md-6 p-4 order-2 order-md-1">
                                <h4 class="heading-4">Office.Net Uzbekistan allows</h4>
                                <p class="small-paragraph">
                                    On April 20, 2016 in the Association of Banks of Uzbekistan was held ceremony of awarding the winners, which took part in the annual national exhibition of banking services, equipment and technology - “Bank Expo-2016” with the support of the Central Bank of the Republic of Uzbekistan and the Association of Banks.
                                </p>
                                <p class="small-paragraph">
                                    As a result of the national exhibition “Bank Expo-2016” - technologies, equipment and services to banking activities nomination winners were determined. JSC "KDB Bank Uzbekistan" was the winner in the nomination "The best bank in support of foreign investors in Uzbekistan”.
                                </p>
                                <p class="small-paragraph">
                                    Receiving the award is remarkable milestone in bank’s activity as it demonstrates recognition of achievements by organizers. Award inspires us to serve clients, including foreign investors under international and local best practices in order to achieve sustainable development and growth. JSC "KDB Bank Uzbekistan" is grateful for kind assistance and support in our activities of the Government and the Central Bank of Uzbekistan.
                                </p>
                            </div>
                            <div class="col-md-6 order-1 order-md-2">
                                <img class="info-img" src="<?php echo e(asset('img/about-us/awards/card-info-img-1.png')); ?>">
                            </div>
                        </div>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/about-us/awards.blade.php ENDPATH**/ ?>