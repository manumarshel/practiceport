<?php

?>
<table class="table table-bordered ng-hide" id="itemDetails">
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
        <!--                                        <! <input type="hidden" name="zper[tax_value]" class="form-control itemDetails" placeholder="">-->
        <td>
            <input
                    type="text"
                    name="zper[tax_value]"
                    class="form-control itemDetails tax-value" data-taxrate="0" data-taxtype="zper"
                    placeholder=""
                    value="<?php if (isset($zper)) echo $zper['tax_value']; ?>"
            >
        </td>
        <td>
            <input type="text" name="zper[integrated_tax]" data-taxtype="zper_it" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($zper)) echo $zper['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="zper[cess]" data-taxtype="zper_cess" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($zper)) echo $zper['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>0.1%</td>
        <td>
            <input type="text" name="p1per[tax_value]" class="form-control itemDetails tax-value"
                   data-taxrate="0.1" data-taxtype="p1per" placeholder="" <?php if (isset($p1per)) echo $p1per['tax_value']; ?>
            >
        </td>
        <td>
            <input type="text" name="p1per[integrated_tax]" data-taxtype="p1per_it" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($p1per)) echo $p1per['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="p1per[cess]" data-taxtype="p1per_cess" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($p1per)) echo $p1per['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>0.25%</td>
        <td>
            <input type="text" name="p25per[tax_value]" class="form-control itemDetails tax-value" data-taxrate="0.25" data-taxtype="p25per"
                   placeholder=""
                   value="<?php if (isset($p25per)) echo $p25per['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="p25per[integrated_tax]" data-taxtype="p25per_it" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($p25per)) echo $p25per['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="p25per[cess]" data-taxtype="p25per_cess" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($p25per)) echo $p25per['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>1%</td>
        <td>
            <input type="text" name="onePer[tax_value]" class="form-control itemDetails tax-value" data-taxrate="1" data-taxtype="onePer"
                   placeholder=""
                   value="<?php if (isset($onePer)) echo $onePer['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="onePer[integrated_tax]" data-taxtype="onePer_it" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($onePer)) echo $onePer['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="onePer[cess]" data-taxtype="onePer_cess" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($onePer)) echo $onePer['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>1.5%</td>
        <td>
            <input type="text" name="onep5per[tax_value]" class="form-control itemDetails tax-value" data-taxrate="1.5" data-taxtype="onep5per"
                   placeholder=""
                   value="<?php if (isset($onep5per)) echo $onep5per['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="onep5per[integrated_tax]" data-taxtype="onep5per_it" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($onep5per)) echo $onep5per['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="onep5per[cess]" data-taxtype="onep5per_cess" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($onep5per)) echo $onep5per['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>3%</td>
        <td>
            <input type="text" name="threePer[tax_value]" class="form-control itemDetails tax-value" data-taxrate="3" data-taxtype="threePer"
                   placeholder=""
                   value="<?php if (isset($threePer)) echo $threePer['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="threePer[integrated_tax]" data-taxtype="threePer_it" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($threePer)) echo $threePer['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="threePer[cess]" data-taxtype="threePer_cess" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($threePer)) echo $threePer['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>5%</td>
        <td>
            <input type="text" name="fivePer[tax_value]" class="form-control itemDetails tax-value" data-taxrate="5" data-taxtype="fivePer"
                   placeholder=""
                   value="<?php if (isset($fivePer)) echo $fivePer['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="fivePer[integrated_tax]" data-taxtype="fivePer_it" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($fivePer)) echo $fivePer['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="fivePer[cess]" data-taxtype="fivePer_cess" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($fivePer)) echo $fivePer['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>7.5%</td>
        <td>
            <input type="text" name="sevenP5Per[tax_value]" class="form-control itemDetails tax-value" data-taxrate="7.5"
                   data-taxtype="sevenP5Per" placeholder=""
                   value="<?php if (isset($sevenP5Per)) echo $sevenP5Per['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="sevenP5Per[integrated_tax]" data-taxtype="sevenP5Per_it" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($sevenP5Per)) echo $sevenP5Per['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="sevenP5Per[cess]" data-taxtype="sevenP5Per_cess" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($sevenP5Per)) echo $sevenP5Per['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>12%</td>
        <td>
            <input type="text" name="twlvePer[tax_value]" class="form-control itemDetails tax-value" data-taxrate="12" data-taxtype="twlvePer"
                   placeholder=""
                   value="<?php if (isset($twlvePer)) echo $twlvePer['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="twlvePer[integrated_tax]" data-taxtype="twlvePer_it" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($twlvePer)) echo $twlvePer['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="twlvePer[cess]" data-taxtype="twlvePer_cess" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($twlvePer)) echo $twlvePer['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>18%</td>
        <td>
            <input type="text" name="eitnnPercent[tax_value]" class="form-control itemDetails tax-value" data-taxrate="18"
                   data-taxtype="eitnnPercent" placeholder=""
                   value="<?php if (isset($eitnnPercent)) echo $eitnnPercent['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="eitnnPercent[integrated_tax]" data-taxtype="eitnnPercent_it" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($eitnnPercent)) echo $eitnnPercent['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="eitnnPercent[cess]" data-taxtype="eitnnPercent_cess" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($eitnnPercent)) echo $eitnnPercent['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>28%</td>
        <td>
            <input type="text" name="twoEightPer[tax_value]" class="form-control itemDetails tax-value" data-taxrate="28"
                   data-taxtype="twoEightPer" placeholder=""
                   value="<?php if (isset($twoEightPer)) echo $twoEightPer['tax_value']; ?>">
        </td>
        <td>
            <input type="text"  data-taxtype="twoEightPer_it" name="twoEightPer[integrated_tax]" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($twoEightPer)) echo $twoEightPer['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" data-taxtype="twoEightPer_cess" name="twoEightPer[cess]" class="form-control itemDetails" placeholder=""
                   value="<?php if (isset($twoEightPer)) echo $twoEightPer['cess']; ?>">
        </td>
    </tr>
    <input type="hidden" name="item_detail_id" id="item_detail_id">
</table>
