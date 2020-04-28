<aside class="col-xl-3 aside-hero">
    <h2 class="heading-3">investors</h2>
    <ul>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/investors/share-information') ? 'javascript:void(0)' : route('investors.share-information', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/investors/share-information') ? 'active' : ''); ?>">Share Information</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/investors/voting-results') ? 'javascript:void(0)' : route('investors.voting-results', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/investors/voting-results') ? 'active' : ''); ?>">Voting Results</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/investors/information-on-gsm') ? 'javascript:void(0)' : route('investors.information-on-gsm', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/investors/information-on-gsm') ? 'active' : ''); ?>">Information on GSM</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/investors/substantial-facts') ? 'javascript:void(0)' : route('investors.substantial-facts', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/investors/substantial-facts') ? 'active' : ''); ?>">Substantial Facts</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/investors/affiliate-personas') ? 'javascript:void(0)' : route('investors.affiliate-personas', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/investors/affiliate-personas') ? 'active' : ''); ?>">Affiliate Personas & Parties</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/investors/audit-reports') ? 'javascript:void(0)' : route('investors.audit-reports', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/investors/audit-reports') ? 'active' : ''); ?>">Audit Reports</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is( app()->getLocale() . '/investors/financial-statements') ? 'javascript:void(0)' : route('investors.financial-statements', app()->getLocale())); ?>" class="<?php echo e(Request::is( app()->getLocale() . '/investors/financial-statements') ? 'active' : ''); ?>">Financial Statements</a>
        </li>
    </ul>
</aside><?php /**PATH C:\Users\Teacher\Desktop\KDBLIVE\resources\views/layouts/sidebars/investors-sidebar.blade.php ENDPATH**/ ?>