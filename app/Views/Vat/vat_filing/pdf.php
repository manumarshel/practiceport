<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>VAT Return Submission</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      margin: 0;
      padding: 20px;
      color: #333;
    }

    .container {
      background: white;
      padding: 30px;
      max-width: 900px;
      margin: auto;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
    }

    h1, h2 {
      text-align: center;
      color: #333;
    }

    .submitted-badge {
      float: right;
      margin-top: -20px;
      color: #006666;
      font-weight: bold;
    }

    .info-table {
      width: 100%;
      margin-top: 20px;
      border-collapse: collapse;
    }

    .info-table td {
      padding: 10px 5px;
      vertical-align: top;
    }

    .info-table td:nth-child(1) {
      width: 200px;
      font-weight: bold;
    }

    .info-table td:nth-child(2) {
      color: #333;
    }

    .amount {
      color: #e09b00;
      font-weight: bold;
    }

    .gray-box {
      background: #eee;
      padding: 20px;
      margin-top: 30px;
      border-radius: 5px;
    }

    .gray-box h3 {
      margin-top: 0;
    }

    .footer {
      background: #00334d;
      color: white;
      padding: 20px;
      margin-top: 20px;
      border-radius: 0 0 8px 8px;
      font-size: 14px;
    }

    .button-row {
      text-align: right;
      margin-top: 20px;
    }

    .btn {
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      margin-left: 10px;
      font-size: 14px;
      cursor: pointer;
    }

    .btn.back {
      background-color: #e6e6e6;
      color: #000;
    }

    .btn.download {
      background-color: #006666;
      color: white;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Application Submitted Successfully</h1>
    <div class="submitted-badge">● Submitted</div>

    <table class="info-table">
      <tr><td>TRN</td><td>1042463693000003</td></tr>
      <tr><td>Registrant’s Name</td><td>HAMMER AND FEATHER PROJECT MANAGEMENT L.L.C</td></tr>
      <tr><td>Reference Number</td><td>230008411219</td></tr>
      <tr><td>Submission Date</td><td>23/06/2025</td></tr>
      <tr><td>VAT Return Period</td><td>01/03/2025 - 31/05/2025</td></tr>
      <tr><td>VAT Stagger</td><td>Stagger 2 – Quarterly (Mar to Feb)</td></tr>
      <tr><td>Due Date</td><td>30 June 2025</td></tr>
      <tr><td>Tax Year End</td><td>28 February 2026</td></tr>
      <tr><td>Return Amount</td><td class="amount">AED 25,700.99</td></tr>
      <tr><td>Due Amount</td><td class="amount">AED 0.00</td></tr>
    </table>

    <div class="gray-box">
      <h3>What's next</h3>
      <p>1. Following the submission of your VAT return, the reported payable tax must be settled within the due date. Delay in payment would result in a late payment penalty.</p>
      <p>2. The status of your application in the dashboard will be updated accordingly. You can check the status of your application at any time by logging into your taxpayer portal.</p>

      <h3>Important Notes</h3>
      <p>1. You can edit your submitted VAT return until the due date.</p>
      <p>2. If you become aware after the due date that the VAT return submitted is incorrect, you are required to correct the error. Depending on the amount, you can correct your return either by submitting a Voluntary Disclosure or as an adjustment in the tax return for the tax period in which the error has been discovered.</p>
    </div>

    <div class="footer">
      For any inquiry or assistance, please contact us on: 
      Within UAE: 600509994 | Outside UAE: +971 600509994 | 
      Email us at info@tax.gov.ae
    </div>

    <div class="button-row">
      <button class="btn back">Back to Dashboard</button>
      <button class="btn download">Download</button>
    </div>
  </div>

</body>
</html>
