<?php

?>
<table class="table table-bordered">
    <tr>
        <th rowspan="2">Rate (%)</th>
        <th rowspan="2">Taxable Value (₹)</th>
        <th colspan="2">Amount of Tax</th>
    </tr>
    <tr>
        <th>Integrated Tax (₹)</th>
        <th>CESS (₹)</th>
    </tr>
    <tr>
        <td>0%</td>
        <!--                                        <! <input type="hidden" name="zper[tax_value]" class="form-control" placeholder="">-->
        <td>
            <input
                    type="text"
                    name="zper[tax_value]"
                    class="form-control"
                    placeholder=""
                    value="<?php if (isset($_9bcdn_zper)) echo $_9bcdn_zper['tax_value']; ?>"
            >
        </td>
        <td>
            <input type="text" name="zper[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_zper)) echo $_9bcdn_zper['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="zper[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_zper)) echo $_9bcdn_zper['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>0.1%</td>
        <td>
            <input type="text" name="p1per[tax_value]" class="form-control"
                   placeholder="" <?php if (isset($_9bcdn_p1per)) echo $_9bcdn_p1per['tax_value']; ?>>
        </td>
        <td>
            <input type="text" name="p1per[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_p1per)) echo $_9bcdn_p1per['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="p1per[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_p1per)) echo $_9bcdn_p1per['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>0.25%</td>
        <td>
            <input type="text" name="p25per[tax_value]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_p25per)) echo $_9bcdn_p25per['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="p25per[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_p25per)) echo $_9bcdn_p25per['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="p25per[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_p25per)) echo $_9bcdn_p25per['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>1%</td>
        <td>
            <input type="text" name="onePer[tax_value]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_onePer)) echo $_9bcdn_onePer['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="onePer[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_onePer)) echo $_9bcdn_onePer['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="onePer[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_onePer)) echo $_9bcdn_onePer['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>1.5%</td>
        <td>
            <input type="text" name="onep5per[tax_value]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_onep5per)) echo $_9bcdn_onep5per['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="onep5per[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_onep5per)) echo $_9bcdn_onep5per['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="onep5per[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_onep5per)) echo $_9bcdn_onep5per['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>3%</td>
        <td>
            <input type="text" name="threePer[tax_value]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_threePer)) echo $_9bcdn_threePer['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="threePer[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_threePer)) echo $_9bcdn_threePer['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="threePer[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_threePer)) echo $_9bcdn_threePer['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>5%</td>
        <td>
            <input type="text" name="fivePer[tax_value]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_fivePer)) echo $_9bcdn_fivePer['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="fivePer[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_fivePer)) echo $_9bcdn_fivePer['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="fivePer[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_fivePer)) echo $_9bcdn_fivePer['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>7.5%</td>
        <td>
            <input type="text" name="sevenP5Per[tax_value]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_sevenP5Per)) echo $_9bcdn_sevenP5Per['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="sevenP5Per[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_sevenP5Per)) echo $_9bcdn_sevenP5Per['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="sevenP5Per[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_sevenP5Per)) echo $_9bcdn_sevenP5Per['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>12%</td>
        <td>
            <input type="text" name="twlvePer[tax_value]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_twlvePer)) echo $_9bcdn_twlvePer['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="twlvePer[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_twlvePer)) echo $_9bcdn_twlvePer['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="twlvePer[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_twlvePer)) echo $_9bcdn_twlvePer['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>18%</td>
        <td>
            <input type="text" name="eitnnPercent[tax_value]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_eitnnPercent)) echo $_9bcdn_eitnnPercent['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="eitnnPercent[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_eitnnPercent)) echo $_9bcdn_eitnnPercent['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="eitnnPercent[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($_9bcdn_eitnnPercent)) echo $_9bcdn_eitnnPercent['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>28%</td>
        <td>
            <input type="text" name="twoEightPer[tax_value]" class="form-control" placeholder="" value="<?php if (isset($_9bcdn_twoEightPer)) echo $_9bcdn_twoEightPer['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="twoEightPer[integrated_tax]" class="form-control" placeholder="" value="<?php if (isset($_9bcdn_twoEightPer)) echo $_9bcdn_twoEightPer['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="twoEightPer[cess]" class="form-control" placeholder="" value="<?php if (isset($_9bcdn_twoEightPer)) echo $_9bcdn_twoEightPer['cess']; ?>">
        </td>
    </tr>
    <input type="hidden" name="item_detail_id" id="item_detail_id">
</table>
