<p>New credit application has been received!</p>
<p>Name of the organization: <?php echo e($data['company']); ?></p>
<p>Type of activity: <?php echo e($data['activity_type']); ?></p>
<p>Starting year of business: <?php echo e($data['start_year']); ?></p>
<p>Number of employees: <?php echo e($data['employees_number']); ?></p>
<p>Tax Identification Number: <?php echo e($data['tax_id']); ?></p>
<p>Address: <?php echo e($data['address']); ?></p>
<p>Full name of the Director/Manager of the organization: <?php echo e($data['manager_name']); ?></p>
<p>E-mail address: <?php echo e($data['email']); ?></p>
<p>Telephone number for contact person: <?php echo e($data['phone']); ?></p>
<p>Bank's name where a demand account is opened: <?php echo e($data['bank_name']); ?></p>
<p>Average monthly revenue received through a current account in national currency: <?php echo e($data['revenue_national']); ?></p>
<p>Average monthly revenue received through a current account in foreign currency: <?php echo e($data['revenue_foreign']); ?></p>
<p>Existing loan debt (leasing) in a bank (in UZS): <?php echo e($data['debt_uzs']); ?></p>
<p>Existing loan debt (leasing) in a bank (in USD): <?php echo e($data['debt_usd']); ?></p>
<p>Existing loan debt (leasing) in a bank (in EUR): <?php echo e($data['debt_eur']); ?></p>
<p>Requested loan amount: <?php echo e($data['loan_amount']); ?></p>
<p>Loan currency: <?php echo e($data['loan_currency']); ?></p>
<p>Purpose of a loan: <?php echo e($data['purpose']); ?></p>
<p>Term of loan, months: <?php echo e($data['loan_term']); ?></p>
<p>Grace period, months: <?php echo e($data['grace_period']); ?></p>
<p>Proposed collateral: <?php echo e($data['collateral']); ?></p>
<p>Name and address of the proposed collateral: <?php echo e($data['collateral_name']); ?></p>
<p>Estimated (market) value of the proposed collateral: <?php echo e($data['collateral_value']); ?></p><?php /**PATH /usr/local/www/apache24/data/resources/views/emails/credit-application.blade.php ENDPATH**/ ?>