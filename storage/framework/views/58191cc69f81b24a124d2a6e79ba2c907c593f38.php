<aside class="col-xl-3 aside-hero">
    <h2 class="heading-3">
        <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.corporate'); ?>
    </h2>
    <ul>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/crm') ? 'javascript:void(0)' : route('corporates.crm', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/crm') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.client-relationship'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/account-opening') ? 'javascript:void(0)' : route('corporates.account-opening', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/account-opening') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.account-opening'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/payments-and-cash-management') ? 'javascript:void(0)' : route('corporates.payments-and-cash-management', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/payments-and-cash-management') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.payments-cash'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/deposits') ? 'javascript:void(0)' : route('corporates.deposits', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/deposits') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.deposits'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/remote-banking') ? 'javascript:void(0)' : route('corporates.remote-banking', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/remote-banking') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.digital-banking'); ?>
            </a>
        </li>
        <li>
            <a class="<?php echo e(Str::contains(Route::currentRouteName(), 'corporates.credit') ? 'active' : ''); ?>" data-toggle="collapse" href="#remote-banking-1" role="button" aria-expanded="false" aria-controls="remote-banking-1">
                <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.credit'); ?>
                <span class="icon-top-2 pl-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7.41" viewBox="0 0 12 7.41"><path d="M7.41,8.59,12,13.17l4.59-4.58L18,10l-6,6L6,10Z" transform="translate(-6 -8.59)"/></svg>
                </span>
            </a>
        </li>
        <div class="collapse <?php echo e(Str::contains(Route::currentRouteName(), 'corporates.credit') ? 'show' : ''); ?>" id="remote-banking-1">
            <li>
                <a class="drop-item <?php echo e(Request::is( app()->getLocale() . '/corporates/credit') ? 'active' : ''); ?>" href="<?php echo e(route('corporates.credit', app()->getLocale())); ?>">
                    <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.credit-categories'); ?>
                </a>
            </li>
            <li>
                <a class="drop-item <?php echo e(Request::is( app()->getLocale() . '/corporates/credit/credit-legal-entities') ? 'active' : ''); ?>" href="<?php echo e(route('corporates.credit.credit-legal-entities', app()->getLocale())); ?>">
                    <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.credit-for'); ?>
                </a>
            </li>
            <li>
                <a class="drop-item <?php echo e(Request::is( app()->getLocale() . '/corporates/credit/application-for-loan') ? 'active' : ''); ?>" href="<?php echo e(route('corporates.credit.application-for-loan', app()->getLocale())); ?>">
                    <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.application-for'); ?>
                </a>
            </li>
        </div>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/trade-finance') ? 'javascript:void(0)' : route('corporates.trade-finance', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/trade-finance') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.trade-finance'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/export-import') ? 'javascript:void(0)' : route('corporates.export-import', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/export-import') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.export-import'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/treasury') ? 'javascript:void(0)' : route('corporates.treasury', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/treasury') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.treasury'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/correspondent-banks') ? 'javascript:void(0)' : route('corporates.correspondent-banks', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/correspondent-banks') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.correspondent-banks'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/local-cards') ? 'javascript:void(0)' : route('corporates.local-cards', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/local-cards') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.local-cards'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/international-cards') ? 'javascript:void(0)' : route('corporates.international-cards', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/international-cards') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.international-cards'); ?>
            </a>
        </li>

        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/local-terminals') ? 'javascript:void(0)' : route('corporates.local-terminals', app()->getLocale(), app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/local-terminals') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.acquiring-services'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/cciapm') ? 'javascript:void(0)' : route('corporates.cciapm', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/cciapm') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.cciapm'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/corporates/bank-tariffs') ? 'javascript:void(0)' : route('corporates.bank-tariffs', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/corporates/bank-tariffs') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/corporates-sidebar.bank-tariffs'); ?>
            </a>
        </li>
    </ul>
</aside><?php /**PATH E:\KDB\resources\views/layouts/sidebars/corporates-sidebar.blade.php ENDPATH**/ ?>