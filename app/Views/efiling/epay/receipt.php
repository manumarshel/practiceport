<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../public/assets/efiling/css/reciept.css">
    <title>E-Pay Tax</title>
  </head>
  <body>
  <div class="page">

<div class="topContainer">
  <div>
    <h1 class="topHeading">INCOME TAX DEPARTMENT</h1>
    <h2 class="topPara"> Challan Receipt</h2>
  </div>
  <div class="imageHolder">
    <img src="../../public/assets/efiling/images/efiling_logo.svg" alt="">
  </div>
</div>

<div>
  <table class="tableStyle" frame=void rules=rows cellpadding="5">
    <tbody class="tableBody" id="tableOne">
      <tr class="tableRow">
        <td>TAN</td>
        <td>:</td>
        <td><?php echo session('tan');?></td>
      </tr>

      <tr>
        <td>Name </td>
        <td>:</td>
        <td><?php echo session('company_name');?> </td>
      </tr>

      <tr>
        <td>Assessment Year </td>
        <td>:</td>
        <td><?php echo $assesment_year; ?></td>
      </tr>

      <tr>
        <td>Major Head </td>
        <td>:</td>
        <td><?php if($type == 1) { echo "Income Tax (Other than Companies) (0021)"; } else { echo "Corporation Tax (0020)"; } ?></td>
      </tr>

      <tr>
        <td>Minor Head </td>
        <td>:</td>
        <td>TDS/TCS Payable by Taxpayer (200)</td>
      </tr>

      <tr>
        <td>Nature of Payment </td>
        <td>:</td>
        <td><?php echo $code; ?></td>
      </tr>

      <tr>
        <td>Amount (in Rs.) </td>
        <td>:</td>
        <td>₹ <?php echo $total; ?></td>
      </tr>

      <tr>
        <td>Amount (in words)</td>
        <td>:</td>
        <td><?php echo $words_total; ?></td>
      </tr>

      <tr>
        <td>CIN</td>
        <td>:</td>
        <td>35678990201223UBIN</td>
      </tr>

      <tr>
        <td>Mode of Payment</td>
        <td>:</td>
        <td>Net Banking</td>
      </tr>

      <tr>
        <td>Bank Name</td>
        <td>:</td>
        <td>Union Bank Of India</td>
      </tr>

      <tr>
        <td>Bank Reference Number</td>
        <td>:</td>
        <td>521544694</td>
      </tr>

      <tr>
        <td>Date of Deposit </td>
        <td>:</td>
        <td><?php echo date('d/m/Y', strtotime($created_at)); ?></td>
      </tr>

      <tr>
        <td>BSR code </td>
        <td>:</td>
        <td>0290071</td>
      </tr>

      <tr>
        <td>Challan No</td>
        <td>:</td>
        <td>29287</td>
      </tr>

      <tr>
        <td>Tender Date</td>
        <td>:</td>
        <td><?php echo date('d/m/Y', strtotime($created_at)); ?></td>
      </tr>

    </tbody>
  </table>
</div>

<h2 class="bottomHeading">Tax Breakup Details (Amount In ₹)</h2>

<div>
  <table class="tableStyle" frame=void rules=rows cellpadding="5">
    <tbody class="tableBody" id="tableTwo">
      <tr class="tableRow">
        <td>A</td>
        <td>Tax</td>
        <td class="bold">₹ <?php echo $tax ?? 0; ?></td>
      </tr>

      <tr class="tableRow">
        <td>B</td>
        <td>Surcharge</td>
        <td class="bold">₹ <?php echo $supercharge ?? 0; ?></td>
      </tr>

      <tr class="tableRow">
        <td>C</td>
        <td>Cess</td>
        <td class="bold">₹ <?php echo $cess ?? 0; ?></td>
      </tr>

      <tr class="tableRow">
        <td>D</td>
        <td>Interest</td>
        <td class="bold">₹ <?php echo $interest ?? 0; ?></td>
      </tr>

      <tr class="tableRow">
        <td>E</td>
        <td>Penalty</td>
        <td class="bold">₹ <?php echo $penalty ?? 0; ?></td>
      </tr>

      <tr class="tableRow">
        <td>F</td>
        <td>Fee under section 234E</td>
        <td class="bold">₹ 0</td>
      </tr>

      <tr class="tableRow">
        <td></td>
        <td class="bold">Total (A+B+C+D+E+F)</td>
        <td class="bold">₹ <?php echo $total ?? 0; ?></td>
      </tr>

      <tr class="tableRow">
        <td></td>
        <td class="bold">Total (In Words)</td>
        <td class="bold"><?php echo $words_total ?? 0; ?></td>
      </tr>

    </tbody>
  </table>
</div>

<div class="bottomContainer">
  <h1 class="bottomTitle">Thanks for being a committed taxpayer!</h1>
  <p class="bottomPara">Please print this challan receipt only if absolutely required. Save Paper, Save Environment.</p>
</div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../../public/assets/efiling/js/navigationBar.js" ></script>
<script>
    $(document).ready(function(){
      
    });
  </script>
  </body>
</html>
