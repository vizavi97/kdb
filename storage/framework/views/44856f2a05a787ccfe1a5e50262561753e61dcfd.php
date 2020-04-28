<?php $__env->startSection('page-title', 'Trade Finance'); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph">Trade Finance</span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Trade Finance</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/trade-finance.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container trade-finance">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2">Solutions</h2>
                <p class="small-paragraph">
                    Being one of the major a foreign bank in Uzbekistan, JSC “KDB Bank Uzbekistan” has partnership with other well-known foreign partner banks that provides the most advanced forms of documentary payments and trade finance instruments based on international practices.
                </p>
                <p class="small-paragraph">
                    The main tasks of Trade Finance Department of the Bank is to provide high quality, timely and efficient trade finance services to corporate customers. Trade Finance Team operates strongly in accordance with a range of legislative and normative documents of The Republic of Uzbekistan and with international rules such as Uniform Customs and Practice for Documentary Credits (ICC publication number 600, edition 2007), Uniform Rules on Safeguards of the International Chamber of Commerce, INCOTERMS 2010 and others.
                </p>

                <h3 class="heading-3">The Range of Services</h3>
                <div class="row mt-4 pb-48">
                    <div class="col-lg-4">
                        <figure class="m-0">
                            <img class="w-100" src="<?php echo e(asset('img/corporates/trade-finance/export-import.svg')); ?>" alt="Export and import Letters of credit">
                            <figcaption>
                                <img src="<?php echo e(asset('img/corporates/trade-finance/icon-1.svg')); ?>" alt="">
                                <span>Documentary Letters of Credit</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <figure class="m-0">
                            <img class="w-100" src="<?php echo e(asset('img/corporates/trade-finance/bank-guarantees.svg')); ?>" alt="Bank guarantees">
                            <figcaption>
                                <img src="<?php echo e(asset('img/corporates/trade-finance/icon-2.svg')); ?>" alt="">
                                <span>Bank Guarantees</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <figure class="m-0">
                            <img class="w-100" src="<?php echo e(asset('img/corporates/trade-finance/calculations.svg')); ?>" alt="Documentary Collection form of calculations.">
                            <figcaption>
                                <img src="<?php echo e(asset('img/corporates/trade-finance/icon-3.svg')); ?>" alt="">
                                <span>Documentary Collection</span>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                
                <?php if(count($users) > 0): ?>
                    <div class="email pb-48">
                        <span class="small-paragraph email-card-title">For the questions please contact Credit Department via email</span>
                        <div class="row">
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-4">
                                    <a class="email-card" href="mailto:<?php echo e($user->email); ?>">
                                        <?php echo e($user->email); ?>

                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4">
                                <a class="email-card" href="mailto:info@kdb.uz">
                                    info@kdb.uz
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                

                <div class="credit">
                    <img class="w-100 mb-4 align-right" src="<?php echo e(asset('img/corporates/trade-finance/credit.png')); ?>" alt="Letters of credit with post-financing option">
                    <h3 class="heading-3">Documentary Letter of Credit</h3>
                    <p class="small-paragraph">
                        A monetary obligation of the bank that opens the letter of credit (the issuing bank) to pay the agreed amount to the seller on behalf of the buyer, upon receipt of the documents specified in the letter of credit.
                    </p>
                    <p class="small-paragraph bold">The role of Bank under Letters of Credit (L/C)</p>
                    <ul class="right-icon">
                        <li>
                            <p>Opening several types of L/C, including Transferable, Confirmed etc.;</p>
                        </li>
                        <li>
                            <p>Amendment to the terms and conditions of issued L/C, including extension and increase the amount of L/Cs;</p>
                        </li>
                        <li>
                            <p>Confirmation of L/C issued by leading foreign banks;</p>
                        </li>
                        <li>
                            <p>Receipt and verification of the documents under Import L/C received from the nominated banks;</p>
                        </li>
                        <li>
                            <p>Advising and execution of Export L/C;</p>
                        </li>
                        <li>
                            <p>Checking documents presented by beneficiary under Export L/C and dispatching shipping documents to issuing bank;</p>
                        </li>
                        <li>
                            <p>Give detailed consultation regarding trade finance operations to customers and authorized bodies.</p>
                        </li>
                    </ul>
                    <div class="custom-alert">
                        <p class="text">
                            Issuing and servicing of letters of credit is regulated by the Uniform Customs and Practice for Documentary Credits, 2006 revision (ICC publication # 600)
                        </p>
                    </div>
                </div>
                <div class="letters-credit">
                    <img class="w-100 mb-4 align-right" src="<?php echo e(asset('img/corporates/trade-finance/import-letters-of-credit.png')); ?>" alt="import Letters of credit">
                    <h3 class="heading-3">Documents to Open Import L/C</h3>
                    <ul class="right-icon mt-4">
                        <li>
                            <p>
                                Application for Opening Letter of Credit, filled by a Clint (form #1);
                            </p>
                        </li>
                        <li>
                            <p>
                                Copy of import contract concluded between the Clint and its foreign partner (as an applicant and beneficiary);
                            </p>
                        </li>
                        <li>
                            <p>
                                Other relevant documents. 
                            </p>
                        </li>
                    </ul>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Uzgenius Academy\Desktop\WEBSITES\KDB\resources\views/corporates/trade-finance.blade.php ENDPATH**/ ?>