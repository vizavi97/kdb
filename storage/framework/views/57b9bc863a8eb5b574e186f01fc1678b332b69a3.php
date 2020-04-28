<?php $__env->startSection('page-title', 'Credit'); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph">Credit</span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Credit</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/credit/credit.css')); ?>">

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/individuals/credit.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container credit my-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <h2 class="heading-2 mb-4">Crediting of Legal Entities' employees</h2>
                <h3 class="heading-3 mb-4">Lending Terms</h3>
                <div class="row">
                    <div class="col-lg-3">
                        <p class="small-paragraph">
                            <strong>Borrower</strong>
                        </p>
                    </div>
                    <div class="col-lg-9">
                        <p class="small-paragraph">An employee who works at an enterprise or in an organization that has a primary account with KDB Bank Uzbekistan Note: An employee who works under an employment contract on an ongoing basis</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <p class="small-paragraph">
                            <strong>Currency Of The Credit</strong>
                        </p>
                    </div>
                    <div class="col-lg-9">
                        <p class="small-paragraph">National currency (UZS)</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <p class="small-paragraph">
                            <strong>Maximum Loan Amount</strong>
                        </p>
                    </div>
                    <div class="col-lg-9">
                        <p class="small-paragraph">The average monthly salary of the borrower for the last 12 months</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <p class="small-paragraph">
                            <strong>Credit Term</strong>
                        </p>
                    </div>
                    <div class="col-lg-9">
                        <p class="small-paragraph">12 months</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <p class="small-paragraph">
                            <strong>Form Of Credit Allocation</strong>
                        </p>
                    </div>
                    <div class="col-lg-9">
                        <p class="small-paragraph">An additional extra limit is established on the borrower's plastic card in a recoverable (revolving) form</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <p class="small-paragraph">
                            <strong>Loan Repayment Procedure</strong>
                        </p>
                    </div>
                    <div class="col-lg-9">
                        <p class="small-paragraph">From incoming funds to a plastic card due to wages or other income, and the borrower can make cash to the bank's office to pay off</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <p class="small-paragraph">
                            <strong>Annual Interest Rate</strong>
                        </p>
                    </div>
                    <div class="col-lg-9">
                        <p class="small-paragraph">Determined by the Credit Committee of the Bank</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-3">
                        <p class="small-paragraph">
                            <strong>Collateral</strong>
                        </p>
                    </div>
                    <div class="col-lg-9">
                        <p class="small-paragraph">Guarantee of the corporate client-employer or Insurance coverage of credit risk in the amount of 125% of the loan amount.</p>
                    </div>
                </div>
                <p class="small-paragraph mb-0">
                    <strong>For the questions please contact Credit Department via emails</strong>
                </p>

                
                <?php if(count($emails) > 0): ?>
                    <div class="email">
                        <div class="row">
                            <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-4 mt-4">
                                    <a class="email-card" href="mailto:<?php echo e($email->email); ?>">
                                        <?php echo e($email->email); ?>

                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>
                


                <div class="row mt-5">

                    <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="modal-open" modal-id="<?php echo e($branch->id); ?>">
                                <img src="<?php echo e(asset('img/individuals/credit/building.svg')); ?>">
                                <h4 class="heading-4 text-center"><?php echo e($branch->getTranslatedAttribute('card_title', app()->getLocale(), 'fallbackLocale')); ?></h4>    
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>


                
                <div class="credit-calculator mt-4">
                    <h4>Calculate Your Loan</h4>
                    <form action="#" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row m-0">
                            <div class="col-lg-8 px-0 pr-lg-4">
                                <div class="slider">
                                    <div class="header">
                                        <h5>Amount</h5>
                                        <div class="holder">
                                            <input type="text" id="amount-output" value="10 000 000" maxlength="14">
                                            so`m
                                        </div>
                                    </div>
                                    <div class="body">
                                        <input type="range" min="5000000" max="50000000000" value="10000000" step="100000" class="range" id="amount-range">
                                        <div class="ranged-area" id="amount-ranged-area"></div>
                                    </div>
                                    <div class="footer">
                                        <p>5 000 000</p>
                                        <p>50 000 000 000</p>
                                    </div>
                                </div>
                                <div class="slider mt-3">
                                    <div class="header">
                                        <h5>Months</h5>
                                        <div class="holder">
                                            <input type="text" id="month-output" value="12" maxlength="2">
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
                                            <input type="text" id="interest-output" value="12" maxlength="2">
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
                                        <span id="monthly-payment"></span>
                                        so'm
                                    </div>
                                    <div class="label">Total Payment</div>
                                    <div class="output">
                                        <span id="total-payment"></span>
                                        so'm
                                    </div>
                                    <div class="label">Total Interest</div>
                                    <div class="output pb-0">
                                        <span id="total-interest"></span>
                                        so'm
                                    </div>
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
                

                <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="global-modal-window" id="<?php echo e($branch->id); ?>">
                        <div class="global-modal-content">
                            <div class="modal-close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                                </svg>
                            </div>
                            <div class="modal-content-inner">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?php echo e(asset('img/individuals/credit/head-office.png')); ?>">
                                    </div>
                                    <div class="col-md-6 px-3 py-4">
                                        <h4 class="heading-4 mb-4">Head Office of JSC “KDB Bank Uzbekistan"</h4>
                                        <div class="row mb-4">
                                            <div class="col-lg-3">
                                                <p class="small-paragraph">
                                                    <strong>Address:</strong>
                                                </p>
                                            </div>
                                            <div class="col-lg-9">
                                                <p class="small-paragraph">3, Bukhoro Str., 100047, Tashkent, Uzbekistan</p>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-lg-3">
                                                <p class="small-paragraph">
                                                    <strong>Tel.:</strong>
                                                </p>
                                            </div>
                                            <div class="col-lg-9">
                                                <p class="small-paragraph">(+998) 78 120-80-00, (+998) 78 140-56-66, (+998) 78 140-56-67</p>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-lg-3">
                                                <p class="small-paragraph">
                                                    <strong>Fax:</strong>
                                                </p>
                                            </div>
                                            <div class="col-lg-9">
                                                <p class="small-paragraph">(+998) 78 120-69-70</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </main>

            <?php echo $__env->make('layouts.sidebars.individuals-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- Modal js -->
    <script src="<?php echo e(asset('js/modal.js')); ?>"></script>

    
    <script src="<?php echo e(asset('js/jquery.number.min.js')); ?>"></script>
    
    
    <script src="<?php echo e(asset('js/credit-calculator.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User 5\Desktop\KDB Last\resources\views/individuals/credit.blade.php ENDPATH**/ ?>