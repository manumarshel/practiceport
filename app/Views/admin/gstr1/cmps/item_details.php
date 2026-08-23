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
                    value="<?php if (isset($zper)) echo $zper['tax_value']; ?>"
            >
        </td>
        <td>
            <input type="text" name="zper[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($zper)) echo $zper['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="zper[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($zper)) echo $zper['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>0.1%</td>
        <td>
            <input type="text" name="p1per[tax_value]" class="form-control"
                   placeholder="" <?php if (isset($p1per)) echo $p1per['tax_value']; ?>>
        </td>
        <td>
            <input type="text" name="p1per[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($p1per)) echo $p1per['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="p1per[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($p1per)) echo $p1per['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>0.25%</td>
        <td>
            <input type="text" name="p25per[tax_value]" class="form-control" placeholder=""
                   value="<?php if (isset($p25per)) echo $p25per['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="p25per[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($p25per)) echo $p25per['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="p25per[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($p25per)) echo $p25per['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>1%</td>
        <td>
            <input type="text" name="onePer[tax_value]" class="form-control" placeholder=""
                   value="<?php if (isset($onePer)) echo $onePer['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="onePer[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($onePer)) echo $onePer['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="onePer[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($onePer)) echo $onePer['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>1.5%</td>
        <td>
            <input type="text" name="onep5per[tax_value]" class="form-control" placeholder=""
                   value="<?php if (isset($onep5per)) echo $onep5per['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="onep5per[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($onep5per)) echo $onep5per['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="onep5per[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($onep5per)) echo $onep5per['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>3%</td>
        <td>
            <input type="text" name="threePer[tax_value]" class="form-control" placeholder=""
                   value="<?php if (isset($threePer)) echo $threePer['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="threePer[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($threePer)) echo $threePer['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="threePer[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($threePer)) echo $threePer['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>5%</td>
        <td>
            <input type="text" name="fivePer[tax_value]" class="form-control" placeholder=""
                   value="<?php if (isset($fivePer)) echo $fivePer['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="fivePer[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($fivePer)) echo $fivePer['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="fivePer[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($fivePer)) echo $fivePer['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>7.5%</td>
        <td>
            <input type="text" name="sevenP5Per[tax_value]" class="form-control" placeholder=""
                   value="<?php if (isset($sevenP5Per)) echo $sevenP5Per['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="sevenP5Per[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($sevenP5Per)) echo $sevenP5Per['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="sevenP5Per[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($sevenP5Per)) echo $sevenP5Per['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>12%</td>
        <td>
            <input type="text" name="twlvePer[tax_value]" class="form-control" placeholder=""
                   value="<?php if (isset($twlvePer)) echo $twlvePer['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="twlvePer[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($twlvePer)) echo $twlvePer['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="twlvePer[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($twlvePer)) echo $twlvePer['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>18%</td>
        <td>
            <input type="text" name="eitnnPercent[tax_value]" class="form-control" placeholder=""
                   value="<?php if (isset($eitnnPercent)) echo $eitnnPercent['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="eitnnPercent[integrated_tax]" class="form-control" placeholder=""
                   value="<?php if (isset($eitnnPercent)) echo $eitnnPercent['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="eitnnPercent[cess]" class="form-control" placeholder=""
                   value="<?php if (isset($eitnnPercent)) echo $eitnnPercent['cess']; ?>">
        </td>
    </tr>
    <tr>
        <td>28%</td>
        <td>
            <input type="text" name="twoEightPer[tax_value]" class="form-control" placeholder="" value="<?php if (isset($twoEightPer)) echo $twoEightPer['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="twoEightPer[integrated_tax]" class="form-control" placeholder="" value="<?php if (isset($twoEightPer)) echo $twoEightPer['integrated_tax']; ?>">
        </td>
        <td>
            <input type="text" name="twoEightPer[cess]" class="form-control" placeholder="" value="<?php if (isset($twoEightPer)) echo $twoEightPer['cess']; ?>">
        </td>
    </tr>
    <input type="hidden" name="item_detail_id" id="item_detail_id">
</table>
