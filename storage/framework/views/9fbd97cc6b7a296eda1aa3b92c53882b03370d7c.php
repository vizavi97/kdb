<aside class="col-xl-3 aside-hero">
    <h2 class="heading-3">investors</h2>
    <ul>
        <li>
            <a href="<?php echo e(Request::is('investors/share-information') ? 'javascript:void(0)' : route('investors.share-information')); ?>" class="<?php echo e(Request::is('investors/share-information') ? 'active' : ''); ?>">Share Information</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is('investors/voting-results') ? 'javascript:void(0)' : route('investors.voting-results')); ?>" class="<?php echo e(Request::is('investors/voting-results') ? 'active' : ''); ?>">Voting Results</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is('investors/information-on-gsm') ? 'javascript:void(0)' : route('investors.information-on-gsm')); ?>" class="<?php echo e(Request::is('investors/information-on-gsm') ? 'active' : ''); ?>">Information on GSM</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is('investors/substantial-facts') ? 'javascript:void(0)' : route('investors.substantial-facts')); ?>" class="<?php echo e(Request::is('investors/substantial-facts') ? 'active' : ''); ?>">Substantial Facts</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is('investors/affiliate-personas') ? 'javascript:void(0)' : route('investors.affiliate-personas')); ?>" class="<?php echo e(Request::is('investors/affiliate-personas') ? 'active' : ''); ?>">Affiliate Personas & Parties</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is('investors/audit-reports') ? 'javascript:void(0)' : route('investors.audit-reports')); ?>" class="<?php echo e(Request::is('investors/audit-reports') ? 'active' : ''); ?>">Audit Reports</a>
        </li>
        <li>
            <a href="<?php echo e(Request::is('investors/financial-statements') ? 'javascript:void(0)' : route('investors.financial-statements')); ?>" class="<?php echo e(Request::is('investors/financial-statements') ? 'active' : ''); ?>">Financial Statements</a>
        </li>
    </ul>
</aside><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/layouts/sidebars/investors-sidebar.blade.php ENDPATH**/ ?>