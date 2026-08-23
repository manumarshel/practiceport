<table class="table table-bordered item-table-igst">
    <tr>
        <th rowspan="2">Rate (%)</th>
        <th rowspan="2"><?php if (isset($alternate_title) && $alternate_title == true)  echo 'Gross advance Received (Excluding Tax)'; else echo 'Taxable Value (₹)' ;?></th>
        <th colspan="2">Amount of Tax</th>
    </tr>
    <tr>
        <th>Integrated Tax (₹)</th>
        <th>CESS (₹)</th>
    </tr>
    <tr>
        <td>0%</td>
        <td>
            <input type="text" name="zper[tax_value]" class="form-control tax-value" data-taxrate="0" data-taxtype="zper" data-tblType="igst" placeholder=""
                   value="<?= set_value('zper[tax_value]', (( isset($form_data['zper']['tax_value']) && !empty($form_data['zper'])) ? $form_data['zper']['tax_value'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="zper[integrated_tax]" class="form-control" placeholder=""
                   value="<?= set_value('zper[integrated_tax]', (( isset($form_data['zper']['integrated_tax']) && !empty($form_data['zper'])) ? $form_data['zper']['integrated_tax'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="zper[cess]" class="form-control" placeholder=""
                   value="<?= set_value('zper[cess]', ((!empty($form_data['zper'])) ? $form_data['zper']['cess'] : '')); ?>">
        </td>
    </tr>
    <tr>
        <td>0.1%</td>
        <td>
            <input type="text" name="p1per[tax_value]" class="form-control tax-value" data-taxrate="0.1" data-taxtype="p1per" data-tblType="igst"
                   value="<?= set_value('p1per[tax_value]', ((!empty($form_data['p1per'])) ? $form_data['p1per']['tax_value'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="p1per[integrated_tax]" class="form-control" placeholder=""
                   value="<?= set_value('p1per[integrated_tax]', (( isset($form_data['p1per']['integrated_tax']) && !empty($form_data['p1per'])) ? $form_data['p1per']['integrated_tax'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="p1per[cess]" class="form-control" placeholder=""
                   value="<?= set_value('p1per[cess]', ((!empty($form_data['p1per'])) ? $form_data['p1per']['cess'] : '')); ?>">
        </td>
    </tr>
    <tr>
        <td>0.25%</td>
        <td>
            <input type="text" name="p25per[tax_value]" class="form-control tax-value" placeholder="" data-taxrate="0.25" data-taxtype="p25per" data-tblType="igst"
                   value="<?= set_value('p25per[tax_value]', ((!empty($form_data['p25per'])) ? $form_data['p25per']['tax_value'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="p25per[integrated_tax]" class="form-control" placeholder=""
                   value="<?= set_value('p25per[integrated_tax]', ((isset($form_data['p25per']['integrated_tax']) && !empty($form_data['p25per'])) ? $form_data['p25per']['integrated_tax'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="p25per[cess]" class="form-control" placeholder=""
                   value="<?= set_value('p25per[cess]', ((!empty($form_data['p25per'])) ? $form_data['p25per']['cess'] : '')); ?>">
        </td>
    </tr>
    <tr>
        <td>1%</td>
        <td>
            <input type="text" name="onePer[tax_value]" class="form-control tax-value" placeholder="" data-taxrate="1" data-taxtype="onePer" data-tblType="igst"
                   value="<?= set_value('onePer[tax_value]', ((!empty($form_data['onePer'])) ? $form_data['onePer']['tax_value'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="onePer[integrated_tax]" class="form-control" placeholder=""
                   value="<?= set_value('onePer[integrated_tax]', ((isset($form_data['onePer']['integrated_tax']) && !empty($form_data['onePer'])) ? $form_data['onePer']['integrated_tax'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="onePer[cess]" class="form-control" placeholder=""
                   value="<?= set_value('onePer[cess]', ((!empty($form_data['onePer'])) ? $form_data['onePer']['cess'] : '')); ?>">
        </td>
    </tr>
    <tr>
        <td>1.5%</td>
        <td>
            <input type="text" name="onep5per[tax_value]" class="form-control tax-value" placeholder="" data-taxrate="1.5" data-taxtype="onep5per" data-tblType="igst"
                   value="<?= set_value('onep5per[tax_value]', ((!empty($form_data['onep5per'])) ? $form_data['onep5per']['tax_value'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="onep5per[integrated_tax]" class="form-control" placeholder=""
                   value="<?= set_value('onep5per[integrated_tax]', ((isset($form_data['onep5per']['integrated_tax']) && !empty($form_data['onep5per'])) ? $form_data['onep5per']['integrated_tax'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="onep5per[cess]" class="form-control" placeholder=""
                   value="<?= set_value('onep5per[cess]', ((!empty($form_data['onep5per'])) ? $form_data['onep5per']['cess'] : '')); ?>">
        </td>
    </tr>
    <tr>
        <td>3%</td>
        <td>
            <input type="text" name="threePer[tax_value]" class="form-control tax-value" placeholder="" data-taxrate="3" data-taxtype="threePer" data-tblType="igst"
                   value="<?= set_value('threePer[tax_value]', ((!empty($form_data['threePer'])) ? $form_data['threePer']['tax_value'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="threePer[integrated_tax]" class="form-control" placeholder=""
                   value="<?= set_value('threePer[integrated_tax]', ((isset($form_data['threePer']['integrated_tax']) && !empty($form_data['threePer'])) ? $form_data['threePer']['integrated_tax'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="threePer[cess]" class="form-control" placeholder=""
                   value="<?= set_value('threePer[cess]', ((!empty($form_data['threePer'])) ? $form_data['threePer']['cess'] : '')); ?>">
        </td>
    </tr>
    <tr>
        <td>5%</td>
        <td>
            <input type="text" name="fivePer[tax_value]" class="form-control tax-value" placeholder="" data-taxrate="5" data-taxtype="fivePer" data-tblType="igst"
                   value="<?= set_value('fivePer[tax_value]', ((!empty($form_data['fivePer'])) ? $form_data['fivePer']['tax_value'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="fivePer[integrated_tax]" class="form-control" placeholder=""
                   value="<?= set_value('fivePer[integrated_tax]', ((isset($form_data['threePer']['integrated_tax']) && !empty($form_data['fivePer'])) ? $form_data['fivePer']['integrated_tax'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="fivePer[cess]" class="form-control" placeholder=""
                   value="<?= set_value('fivePer[cess]', ((!empty($form_data['fivePer'])) ? $form_data['fivePer']['cess'] : '')); ?>">
        </td>
    </tr>
    <tr>
        <td>7.5%</td>
        <td>
            <input type="text" name="sevenP5Per[tax_value]" class="form-control tax-value" placeholder="" data-taxrate="7.5"  data-taxtype="sevenP5Per" data-tblType="igst"
                   value="<?= set_value('sevenP5Per[tax_value]', ((!empty($form_data['sevenP5Per'])) ? $form_data['sevenP5Per']['tax_value'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="sevenP5Per[integrated_tax]" class="form-control" placeholder=""
                   value="<?= set_value('sevenP5Per[integrated_tax]', ((isset($form_data['sevenP5Per']['integrated_tax']) && !empty($form_data['sevenP5Per'])) ? $form_data['sevenP5Per']['integrated_tax'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="sevenP5Per[cess]" class="form-control" placeholder=""
                   value="<?= set_value('sevenP5Per[cess]', ((!empty($form_data['sevenP5Per'])) ? $form_data['sevenP5Per']['cess'] : '')); ?>">
        </td>
    </tr>
    <tr>
        <td>12%</td>
        <td>
            <input type="text" name="twlvePer[tax_value]" class="form-control tax-value" placeholder="" data-taxrate="12" data-taxtype="twlvePer" data-tblType="igst"
                   value="<?= set_value('twlvePer[tax_value]', ((!empty($form_data['twlvePer'])) ? $form_data['twlvePer']['tax_value'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="twlvePer[integrated_tax]" class="form-control" placeholder=""
                   value="<?= set_value('twlvePer[integrated_tax]', ((isset($form_data['twlvePer']['integrated_tax']) && !empty($form_data['twlvePer'])) ? $form_data['twlvePer']['integrated_tax'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="twlvePer[cess]" class="form-control" placeholder=""
                   value="<?= set_value('twlvePer[cess]', ((!empty($form_data['twlvePer'])) ? $form_data['twlvePer']['cess'] : '')); ?>">
        </td>
    </tr>
    <tr>
        <td>18%</td>
        <td>
            <input type="text" name="eitnnPercent[tax_value]" class="form-control tax-value" placeholder="" data-taxrate="18" data-taxtype="eitnnPercent" data-tblType="igst"
                   value="<?= set_value('eitnnPercent[tax_value]', ((!empty($form_data['eitnnPercent'])) ? $form_data['eitnnPercent']['tax_value'] : '')); ?>"
                   value="<?php if (isset($eitnnPercent)) echo $eitnnPercent['tax_value']; ?>">
        </td>
        <td>
            <input type="text" name="eitnnPercent[integrated_tax]" class="form-control" placeholder=""
                   value="<?= set_value('eitnnPercent[integrated_tax]', (( isset($form_data['eitnnPercent']['integrated_tax']) && !empty($form_data['eitnnPercent'])) ? $form_data['eitnnPercent']['integrated_tax'] : '')); ?>"
                   >
        </td>
        <td>
            <input type="text" name="eitnnPercent[cess]" class="form-control" placeholder=""
                   value="<?= set_value('eitnnPercent[cess]', ((!empty($form_data['eitnnPercent'])) ? $form_data['eitnnPercent']['cess'] : '')); ?>"
            >
        </td>
    </tr>
    <tr>
        <td>28%</td>
        <td>
            <input type="text" name="twoEightPer[tax_value]" class="form-control tax-value" placeholder="" data-taxrate="28" data-taxtype="twoEightPer" data-tblType="igst"
                   value="<?= set_value('twoEightPer[tax_value]', ((!empty($form_data['twoEightPer'])) ? $form_data['twoEightPer']['tax_value'] : '')); ?>">
        </td>
        <td>
            <input type="text" name="twoEightPer[integrated_tax]" class="form-control" placeholder=""
                   value="<?= set_value('twoEightPer[integrated_tax]', ((isset($form_data['twoEightPer']['integrated_tax']) && !empty($form_data['twoEightPer'])) ? $form_data['twoEightPer']['integrated_tax'] : '')); ?>" >
        </td>
        <td>
            <input type="text" name="twoEightPer[cess]" class="form-control" placeholder=""
                   value="<?= set_value('twoEightPer[cess]', ((!empty($form_data['twoEightPer'])) ? $form_data['twoEightPer']['cess'] : '')); ?>">
        </td>
    </tr>
    <input type="hidden" name="item_detail_id" id="item_detail_id">
</table>
