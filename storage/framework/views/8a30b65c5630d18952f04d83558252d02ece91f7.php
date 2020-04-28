<?php $__env->startSection('page-title', 'Crediting of Legal Entities'); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph">Crediting of Legal Entities</span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Crediting of Legal Entities</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/credit/credit.css')); ?>">

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/credit/credit-legal-entities.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container credit-legal-entities credit my-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <h2 class="heading-2 mb-4">Crediting of Legal Entities</h2>
                <p class="small-paragraph">
                    JSC “KDB Bank Uzbekistan” offers loans (credit lines) to corporate clients and companies of small business for the following purposes:
                </p>

                <ul class="right-icon mb-5">
                    <li>
                        <p>Replenishment of working capital with the possibility of opening revolving credit lines</p>
                    </li>
                    <li>
                        <p>Purchase of fixed assets (including technological equipment, buildings, transport vehicles and others)</p>
                    </li>
                    <li>
                        <p>Project financing by means of syndicated loans</p>
                    </li>
                    <li>
                        <p>Financial lease</p>
                    </li>
                    <li>
                        <p>Other purposes not violating regulations of the Republic of Uzbekistan</p>
                    </li>
                    <li>
                        <p>Checking documents presented by beneficiary under Export L/C and dispatching shipping documents to issuing bank;</p>
                    </li>
                    <li>
                        <p>Give detailed consultation regarding trade finance operations to customers and authorized bodies.</p>
                    </li>
                </ul>

                <h3 class="heading-3 mb-4">JSC “KDB Bank Uzbekistan” carries out crediting of clients on the following terms:</h3>
                <p><strong>Terms</strong></p>
                <ul class="right-icon mt-4">
                    <li>
                        <p>
                            Short-term loans – for a period not exceeding 1 year
                        </p>
                    </li>
                    <li>
                        <p>
                            Long-term loans – for a period from 1 to 5 years
                        </p>
                    </li>
                </ul>
                <p><strong>Interest Rates</strong></p>
                <ul class="right-icon mt-4">
                    <li>
                        <p>
                            For loans in  a freely convertible currency – LIBOR (6M) + from  4% to 10% per annum
                        </p>
                    </li>
                    <li>
                        <p>
                            For loans (financial leases) in the national currency – CBU refinancing rate + from 4% to 10% per annum
                        </p>
                    </li>
                </ul>
                <p class="small-paragraph">
                    Final interest rate on loans and leases is set depending on the type of lending product, business activity and financial position of a company, as well as other economic indicators of the project.
                </p>
                <p><strong>Loan Amount</strong></p>
                <p><strong>To corporate clients (for one transaction)</strong></p>
                <p><strong>In hard currency</strong></p>
                <ul class="right-icon mt-4">
                    <li>
                        <p>
                            Up to 5,000,000.00 (the amount is shown in USD equiv.).
                        </p>
                    </li>
                </ul>
                <p><strong>In national currency</strong></p>
                <ul class="right-icon mt-4">
                    <li>
                        <p>
                            Up to 40,000,000,000.00
                        </p>
                    </li>
                </ul>
                <p class="small-paragraph">
                    Loan amount cannot exceed the amount of total own capital of the company (according to the balance sheet line #480).
                </p>

                
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
                

            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    
    <script src="<?php echo e(asset('js/jquery.number.min.js')); ?>"></script>
    
    
    <script src="<?php echo e(asset('js/credit-calculator.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User 5\Desktop\KDB Last\resources\views/corporates/credit/credit-legal-entities.blade.php ENDPATH**/ ?>