<?php $__env->startSection('page-title', 'Credit'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Credit</span>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('meta'); ?>

    <title>KDB | Credit</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/credit.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container credit my-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12 mb-4">
                        <a href="#" class="card-link">
                            Crediting of Legal Entities
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 mb-4">
                        <a href="#" class="card-link">
                            Crediting of Legal Entities' employees
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 mb-4">
                        <a href="#" class="card-link">
                            Microloan
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 mb-4 mb-lg-0">
                        <a href="#" class="card-link">
                            Bank Guarantees
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 mb-4 mb-lg-0">
                        <a href="#" class="card-link">
                            Application for Loan
                        </a>
                    </div>
                </div>
                
                
                <div class="credit-calculator mt-5">
                    <h4>Calculate Your Loan</h4>
                    <form action="#" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row m-0">
                            <div class="col-lg-8 px-0 pr-lg-4">
                                <div class="slider">
                                    <div class="header">
                                        <h5>Amount</h5>
                                        <div class="holder">
                                            <span class="amount-output">10000000</span>
                                            so`m
                                        </div>
                                    </div>
                                    <div class="body">
                                        <input type="range" min="5000000" max="50000000000" value="10000000" step="100000" class="range" id="amount-range">
                                        <div class="ranged-area" id="amount-ranged-area"></div>
                                    </div>
                                    <div class="footer">
                                        <p>5000000</p>
                                        <p>50000000000</p>
                                    </div>
                                </div>
                                <div class="slider mt-3">
                                    <div class="header">
                                        <h5>Months</h5>
                                        <div class="holder">
                                            <span class="month-output">12</span>
                                            months
                                        </div>
                                    </div>
                                    <div class="body">
                                        <input type="range" min="6" max="60" value="12" step="1" class="range" id="month-range">
                                        <div class="ranged-area" id="month-ranged-area"></div>
                                    </div>
                                    <div class="footer">
                                        <p>6</p>
                                        <p>60</p>
                                    </div>
                                </div>
                                <div class="slider mt-3">
                                    <div class="header">
                                        <h5>Interest Rate</h5>
                                        <div class="holder">
                                            <span class="interest-output">4</span>
                                            %
                                        </div>
                                    </div>
                                    <div class="body">
                                        <input type="range" min="4" max="40" value="12" step="1" class="range" id="interest-range">
                                        <div class="ranged-area" id="interest-ranged-area"></div>
                                    </div>
                                    <div class="footer">
                                        <p>4</p>
                                        <p>40</p>
                                    </div>
                                </div>
                                <div class="custom-alert mt-4 d-none d-lg-block">
                                    <p class="text">
                                        The calculation is preliminary. You will be provided with exact loan terms and conditions in one of the branches of the bank.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 p-0 mt-4 mt-lg-0">
                                <div class="result">
                                    <div class="label">Monthly Payment</div>
                                    <div class="output">
                                        <span id="monthly-payment">21666</span>
                                        so'm
                                    </div>
                                    <div class="label">Interest Payment</div>
                                    <div class="output">
                                        <span id="monthly-payment">151666</span>
                                        so'm
                                    </div>
                                    <button type="submit" class="mt-3">
                                        Make an enquiry
                                        <span class="pl-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M12,4,10.59,5.41,16.17,11H4v2H16.17l-5.58,5.59L12,20l8-8Z" transform="translate(-4 -4)" fill="#245996"/></svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="custom-alert mt-4 d-block d-lg-none">
                                    <p class="text">
                                        The calculation is preliminary. You will be provided with exact loan terms and conditions in one of the branches of the bank.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <script src="<?php echo e(asset('js/credit-calculator.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDB Last\resources\views/corporates/credit.blade.php ENDPATH**/ ?>