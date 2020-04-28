<aside class="col-xl-3 aside-hero">
    <h2 class="heading-3">corporate</h2>
    <ul>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/crm') ? 'javascript:void(0)' : route('corporates.crm', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/crm') ? 'active' : ''); ?>">Client Relationship Management</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/account-opening') ? 'javascript:void(0)' : route('corporates.account-opening', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/account-opening') ? 'active' : ''); ?>">Account Opening & Administration</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/payments-and-cash-management') ? 'javascript:void(0)' : route('corporates.payments-and-cash-management', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/payments-and-cash-management') ? 'active' : ''); ?>">Payments & Cash Management</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/deposits') ? 'javascript:void(0)' : route('corporates.deposits', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/deposits') ? 'active' : ''); ?>">Deposits</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/remote-banking') ? 'javascript:void(0)' : route('corporates.remote-banking', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/remote-banking') ? 'active' : ''); ?>">Digital Banking</a>
        </li>
        <li>
            <a class="<?php echo e(Str::contains(Route::currentRouteName(), 'corporates.credit') ? 'active' : ''); ?>" data-toggle="collapse" href="#remote-banking-1" role="button" aria-expanded="false" aria-controls="remote-banking-1">
                Credit 
                <span class="icon-top-2 pl-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41"><path d="M7.41,8.59,12,13.17l4.59-4.58L18,10l-6,6L6,10Z" transform="translate(-6 -8.59)"/></svg>
                </span>
            </a>
        </li>
        <div class="collapse <?php echo e(Str::contains(Route::currentRouteName(), 'corporates.credit') ? 'show' : ''); ?>" id="remote-banking-1">
            <li>
                <a class="drop-item <?php echo e(Request::is( app()->getLocale() . '/corporates/credit') ? 'active' : ''); ?>" href="<?php echo e(route('corporates.credit', app()->getLocale())); ?>">Credit Categories</a>
            </li>
            <li>
                <a class="drop-item <?php echo e(Request::is( app()->getLocale() . '/corporates/credit/credit-legal-entities') ? 'active' : ''); ?>" href="<?php echo e(route('corporates.credit.credit-legal-entities', app()->getLocale())); ?>">Credit for Legal Entities</a>
            </li>
            <li>
                <a class="drop-item <?php echo e(Request::is( app()->getLocale() . '/corporates/credit/application-for-loan') ? 'active' : ''); ?>" href="<?php echo e(route('corporates.credit.application-for-loan', app()->getLocale())); ?>">Application for Loan</a>
            </li>
        </div>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/trade-finance') ? 'javascript:void(0)' : route('corporates.trade-finance', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/trade-finance') ? 'active' : ''); ?>">Trade Finance</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/export-import') ? 'javascript:void(0)' : route('corporates.export-import', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/export-import') ? 'active' : ''); ?>">Export & Import</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/treasury') ? 'javascript:void(0)' : route('corporates.treasury', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/treasury') ? 'active' : ''); ?>">Treasury</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/correspondent-banks') ? 'javascript:void(0)' : route('corporates.correspondent-banks', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/correspondent-banks') ? 'active' : ''); ?>">Correspondent Banks</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/local-cards') ? 'javascript:void(0)' : route('corporates.local-cards', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/local-cards') ? 'active' : ''); ?>">Local Cards</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/international-cards') ? 'javascript:void(0)' : route('corporates.international-cards', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/international-cards') ? 'active' : ''); ?>">International Cards</a>
        </li>

        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/local-terminals') ? 'javascript:void(0)' : route('corporates.local-terminals', app()->getLocale(), app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/local-terminals') ? 'active' : ''); ?>">Acquiring Services</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/cciapm') ? 'javascript:void(0)' : route('corporates.cciapm', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/cciapm') ? 'active' : ''); ?>">CCIAPM</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/bank-tariffs') ? 'javascript:void(0)' : route('corporates.bank-tariffs', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/bank-tariffs') ? 'active' : ''); ?>">Bank Tariffs</a>
        </li>
    </ul>
</aside><?php /**PATH C:\Users\Teacher\Desktop\KDB Last\resources\views/layouts/sidebars/corporates-sidebar.blade.php ENDPATH**/ ?>