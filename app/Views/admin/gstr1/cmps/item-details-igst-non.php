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
                   value="">
        </td>
        <td>
            <input type="text" name="zper[integrated_tax]" class="form-control" placeholder=""
                   value="">
        </td>
        <td>
            <input type="text" name="zper[cess]" class="form-control" placeholder=""
                   value="">
        </td>
    </tr>
    <tr>
        <td>0.1%</td>
        <td>
            <input type="text" name="p1per[tax_value]" class="form-control tax-value" data-taxrate="0.1" data-taxtype="p1per" data-tblType="igst"
                   value="">
        </td>
        <td>
            <input type="text" name="p1per[integrated_tax]" class="form-control" placeholder=""
                   value=">
        </td>
        <td>
            <input type="text" name="p1per[cess]" class="form-control" placeholder=""
                   value="">
        </td>
    </tr>
    <tr>
        <td>0.25%</td>
        <td>
            <input type="text" name="p25per[tax_value]" class="form-control tax-value" placeholder="" data-taxrate="0.25" data-taxtype="p25per" data-tblType="igst"
                   value="">
        </td>
        <td>
            <input type="text" name="p25per[integrated_tax]" class="form-control" placeholder=""
                   value="">
        </td>
        <td>
            <input type="text" name="p25per[cess]" class="form-control" placeholder=""
                   value="">
        </td>
    </tr>
    <tr>
        <td>1%</td>
        <td>
            <input type="text" name="onePer[tax_value]" class="form-control tax-value" placeholder="" data-taxrate="1" data-taxtype="onePer" data-tblType="igst"
                   value="">
        </td>
        <td>
            <input type="text" name="onePer[integrated_tax]" class="form-control" placeholder=""
                   value=">
        </td>
        <td>
            <input type="text" name="onePer[cess]" class="form-control" placeholder=""
                   value="">
        </td>
    </tr>
    <tr>
        <td>1.5%</td>
        <td>
            <input type="text" name="onep5per[tax_value]" class="form-control tax-value" placeholder="" data-taxrate="1.5" data-taxtype="onep5per" data-tblType="igst"
                   value="">
        </td>
        <td>
            <input type="text" name="onep5per[integrated_tax]" class="form-control" placeholder=""
                   value="">
        </td>
        <td>
            <input type="text" name="onep5per[cess]" class="form-control" placeholder=""
                   value="">
        </td>
    </tr>
    <tr>
        <td>3%</td>
        <td>
            <input type="text" name="threePer[tax_value]" class="form-control tax-value" placeholder="" data-taxrate="3" data-taxtype="threePer" data-tblType="igst"
                   value="">
        </td>
        <td>
            <input type="text" name="threePer[integrated_tax]" class="form-control" placeholder=""
                   value="">
        </td>
        <td>
            <input type="text" name="threePer[cess]" class="form-control" placeholder=""
                   value="">
        </td>
    </tr>
    <tr>
        <td>5%</td>
        <td>
            <input type="text" name="fivePer[tax_value]" class="form-control tax-value" placeholder="" data-taxrate="5" data-taxtype="fivePer" data-tblType="igst"
                   value="">
        </td>
        <td>
            <input type="text" name="fivePer[integrated_tax]" class="form-control" placeholder=""
                   value="">
        </td>
        <td>
            <input type="text" name="fivePer[cess]" class="form-control" placeholder=""
                   value="">
        </td>
    </tr>
    <tr>
        <td>7.5%</td>
        <td>
            <input type="text" name="sevenP5Per[tax_value]" class="form-control tax-value" placeholder="" data-taxrate="7.5"  data-taxtype="sevenP5Per" data-tblType="igst"
                   value="">
        </td>
        <td>
            <input type="text" name="sevenP5Per[integrated_tax]" class="form-control" placeholder=""
                   value="">
        </td>
        <td>
            <input type="text" name="sevenP5Per[cess]" class="form-control" placeholder=""
                   value="">
        </td>
    </tr>
    <tr>
        <td>12%</td>
        <td>
            <input type="text" name="twlvePer[tax_value]" class="form-control tax-value" placeholder="" data-taxrate="12" data-taxtype="twlvePer" data-tblType="igst"
                   value="">
        </td>
        <td>
            <input type="text" name="twlvePer[integrated_tax]" class="form-control" placeholder=""
                   value="">
        </td>
        <td>
            <input type="text" name="twlvePer[cess]" class="form-control" placeholder=""
                   value="">
        </td>
    </tr>
    <tr>
        <td>18%</td>
        <td>
            <input type="text" name="eitnnPercent[tax_value]" class="form-control tax-value" placeholder="" data-taxrate="18" data-taxtype="eitnnPercent" data-tblType="igst"
                   value="">
        </td>
        <td>
            <input type="text" name="eitnnPercent[integrated_tax]" class="form-control" placeholder=""
                   value="">
        </td>
        <td>
            <input type="text" name="eitnnPercent[cess]" class="form-control" placeholder=""
                   value="">
        </td>
    </tr>
    <tr>
        <td>28%</td>
        <td>
            <input type="text" name="twoEightPer[tax_value]" class="form-control tax-value" placeholder="" data-taxrate="28" data-taxtype="twoEightPer" data-tblType="igst"
                   value="">
        </td>
        <td>
            <input type="text" name="twoEightPer[integrated_tax]" class="form-control" placeholder=""
                   value="" >
        </td>
        <td>
            <input type="text" name="twoEightPer[cess]" class="form-control" placeholder=""
                   value="">
        </td>
    </tr>
    <input type="hidden" name="item_detail_id" id="item_detail_id">
</table>
