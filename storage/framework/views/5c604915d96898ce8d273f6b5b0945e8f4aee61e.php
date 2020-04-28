<aside class="col-xl-3 aside-hero">
    <h2 class="heading-3">
        <?php echo app('translator')->get('layouts/sidebars/investors-sidebar.investors'); ?>
    </h2>
    <ul>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/investors/share-information') ? 'javascript:void(0)' : route('investors.share-information', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/investors/share-information') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/investors-sidebar.share-information'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/investors/voting-results') ? 'javascript:void(0)' : route('investors.voting-results', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/investors/voting-results') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/investors-sidebar.voting-results'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/investors/information-on-gsm') ? 'javascript:void(0)' : route('investors.information-on-gsm', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/investors/information-on-gsm') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/investors-sidebar.information-on'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/investors/substantial-facts') ? 'javascript:void(0)' : route('investors.substantial-facts', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/investors/substantial-facts') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/investors-sidebar.substantial-facts'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/investors/affiliate-personas') ? 'javascript:void(0)' : route('investors.affiliate-personas', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/investors/affiliate-personas') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/investors-sidebar.affiliate-personas'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/investors/audit-reports') ? 'javascript:void(0)' : route('investors.audit-reports', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/investors/audit-reports') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/investors-sidebar.audit-reports'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/investors/financial-statements') ? 'javascript:void(0)' : route('investors.financial-statements', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/investors/financial-statements') ? 'active' : ''); ?>">
                <?php echo app('translator')->get('layouts/sidebars/investors-sidebar.financial-statements'); ?>
            </a>
        </li>
    </ul>
</aside><?php /**PATH /usr/local/www/apache24/data/resources/views/layouts/sidebars/investors-sidebar.blade.php ENDPATH**/ ?>