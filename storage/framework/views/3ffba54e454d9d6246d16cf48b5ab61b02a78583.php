<aside class="col-xl-3 aside-hero">
    <h2 class="heading-3">individual</h2>
    <ul>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/individuals/account-opening') ? 'javascript:void(0)' : route('individuals.account-opening', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/individuals/account-opening') ? 'active' : ''); ?>">Account Opening & Administration</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/individuals/payments-and-transfers') ? 'javascript:void(0)' : route('individuals.payments-and-transfers', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/individuals/payments-and-transfers') ? 'active' : ''); ?>">Payments & Transfers</a>
        </li>
        <li>
            <a class="<?php echo e(Str::contains(Route::currentRouteName(), 'individuals.remote-banking') ? 'active' : ''); ?>" data-toggle="collapse" href="#remote-banking-1" role="button" aria-expanded="false" aria-controls="remote-banking-1">
                remote banking
                <span class="icon-top-2 pl-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41"><path d="M7.41,8.59,12,13.17l4.59-4.58L18,10l-6,6L6,10Z" transform="translate(-6 -8.59)"/></svg>
                </span>
            </a>
        </li>
        <div class="collapse <?php echo e(Str::contains(Route::currentRouteName(), 'individuals.remote-banking') ? 'show' : ''); ?>" id="remote-banking-1">
            <li>
                <a class="drop-item <?php echo e(Request::is( app()->getLocale() . '/individuals/remote-banking/internet-banking') ? 'active' : ''); ?>" href="<?php echo e(route('individuals.remote-banking.internet-banking', app()->getLocale())); ?>">internet banking</a>
            </li>
            <li>
                <a class="drop-item <?php echo e(Request::is( app()->getLocale() . '/individuals/remote-banking/mobile-banking') ? 'active' : ''); ?>" href="<?php echo e(route('individuals.remote-banking.mobile-banking', app()->getLocale())); ?>">mobile banking</a>
            </li>
            <li>
                <a class="drop-item <?php echo e(Request::is( app()->getLocale() . '/individuals/remote-banking/sms-informing') ? 'active' : ''); ?>" href="<?php echo e(route('individuals.remote-banking.sms-informing', app()->getLocale())); ?>">sms informing</a>
            </li>
        </div>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/individuals/deposits') ? 'javascript:void(0)' : route('individuals.deposits', app()->getLocale(), app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/individuals/deposits') ? 'active' : ''); ?>">Deposits</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/individuals/local-cards') ? 'javascript:void(0)' : route('individuals.local-cards', app()->getLocale(), app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/individuals/local-cards') ? 'active' : ''); ?>">Local Cards</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/individuals/local-terminals') ? 'javascript:void(0)' : route('individuals.local-terminals', app()->getLocale(), app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/individuals/local-terminals') ? 'active' : ''); ?>">Local Terminals</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/individuals/international-cards') ? 'javascript:void(0)' : route('individuals.international-cards', app()->getLocale(), app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/individuals/international-cards') ? 'active' : ''); ?>">International Cards</a>
        </li>
        <li>
            <a class="<?php echo e(Str::contains(Route::currentRouteName(), 'individuals.exchange-office') ? 'active' : ''); ?>" data-toggle="collapse" href="#exchange-office" role="button" aria-expanded="false" aria-controls="exchange-office">
                exchange office
                <span class="icon-top-2 pl-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41"><path d="M7.41,8.59,12,13.17l4.59-4.58L18,10l-6,6L6,10Z" transform="translate(-6 -8.59)"/></svg>
                </span>
            </a>
        </li>
        <div class="collapse <?php echo e(Str::contains(Route::currentRouteName(), 'individuals.exchange-office') ? 'show' : ''); ?>" id="exchange-office">
            <li>
                <a class="drop-item <?php echo e(Request::is( app()->getLocale() . '/individuals/exchange-office') ? 'active' : ''); ?>" href="<?php echo e(route('individuals.exchange-office', app()->getLocale())); ?>">exchange office</a>
            </li>
            <li>
                <a class="drop-item <?php echo e(Request::is( app()->getLocale() . '/individuals/exchange-office/currency-conversion') ? 'active' : ''); ?>" href="<?php echo e(route('individuals.exchange-office.currency-conversion', app()->getLocale())); ?>">currency conversion</a>
            </li>
            <li>
                <a class="drop-item <?php echo e(Request::is( app()->getLocale() . '/individuals/exchange-office/procedure') ? 'active' : ''); ?>" href="<?php echo e(route('individuals.exchange-office.procedure', app()->getLocale())); ?>">Procedure on Conversion Operation</a>
            </li>
        </div>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/individuals/conversion-operations') ? 'javascript:void(0)' : route('individuals.conversion-operations', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/individuals/conversion-operations') ? 'active' : ''); ?>">Conversion Operations</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/individuals/bank-tariffs') ? 'javascript:void(0)' : route('individuals.bank-tariffs', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/individuals/bank-tariffs') ? 'active' : ''); ?>">Bank Tariffs</a>
        </li>
    </ul>
</aside><?php /**PATH C:\Users\User 5\Desktop\kdb\resources\views/layouts/sidebars/individuals-sidebar.blade.php ENDPATH**/ ?>