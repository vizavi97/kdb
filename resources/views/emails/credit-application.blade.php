<p>New credit application has been received!</p>
<p>Name of the organization: {{ $data['company'] }}</p>
<p>Type of activity: {{ $data['activity_type'] }}</p>
<p>Starting year of business: {{ $data['start_year'] }}</p>
<p>Number of employees: {{ $data['employees_number'] }}</p>
<p>Tax Identification Number: {{ $data['tax_id'] }}</p>
<p>Address: {{ $data['address'] }}</p>
<p>Full name of the Director/Manager of the organization: {{ $data['manager_name'] }}</p>
<p>E-mail address: {{ $data['email'] }}</p>
<p>Telephone number for contact person: {{ $data['phone'] }}</p>
<p>Bank's name where a demand account is opened: {{ $data['bank_name'] }}</p>
<p>Average monthly revenue received through a current account in national currency: {{ $data['revenue_national'] }}</p>
<p>Average monthly revenue received through a current account in foreign currency: {{ $data['revenue_foreign'] }}</p>
<p>Existing loan debt (leasing) in a bank (in UZS): {{ $data['debt_uzs'] }}</p>
<p>Existing loan debt (leasing) in a bank (in USD): {{ $data['debt_usd'] }}</p>
<p>Existing loan debt (leasing) in a bank (in EUR): {{ $data['debt_eur'] }}</p>
<p>Requested loan amount: {{ $data['loan_amount'] }}</p>
<p>Loan currency: {{ $data['loan_currency'] }}</p>
<p>Purpose of a loan: {{ $data['purpose'] }}</p>
<p>Term of loan, months: {{ $data['loan_term'] }}</p>
<p>Grace period, months: {{ $data['grace_period'] }}</p>
<p>Proposed collateral: {{ $data['collateral'] }}</p>
<p>Name and address of the proposed collateral: {{ $data['collateral_name'] }}</p>
<p>Estimated (market) value of the proposed collateral: {{ $data['collateral_value'] }}</p>