<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Amended B2C(Others) - Add Details</h5>
                </div>
                <div class="m-t-30">
                     <form id="form_validation" action="<?= base_url() . '/admin/gstr1/b2cs-amendment/ecomm-add/' . $question_id; ?>" method="post"  class="form">
                        <input type="hidden" name="question_id" value="<?= $question_id; ?>" /> 
                        <input type="hidden" name="pk_id" value="<?= $pk_id; ?>" />
                        <div class="row">
                            <div class="col form-group">
                                <label for="">POS </label>
                                <select name="original_pos" class="form-control" id="pos">
                                    <option value="" disabled="" selected="selected">Select</option>
                                    <?php
                                    foreach ($pos_list as $k => $value) {
                                        echo '<option label="' . $value . '" value="' . $k . '" ' . set_value('original_pos', ((!empty($form_data)) ? (($form_data['original_pos'] == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col form-group">
                                <label for="">Financial Year</label>
                               <select name="financial_year" id="" class="form-control">
                                    <?php
                                    foreach ($financial_period_list as $k => $value) {
                                        echo '<option label="' . $value . '" value="' . $k . '" ' . set_value('financial_year', ((!empty($form_data)) ? (($form_data['financial_year'] == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col form-group">
                                <label for="">Return Filing Period</label>
                                 <select name="return_filing_period" id="" class="form-control">
                                    <?php
                                    foreach ($quarter_list as $k => $value) {
                                        echo '<option label="' . $value . '" value="' . $k . '" ' . set_value('return_filing_period', ((!empty($form_data)) ? (($form_data['return_filing_period'] == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Revisied/Original State Code (POS) </label>
                               <select name="revised_pos" class="form-control" id="pos">
                                    <option value="" disabled="" selected="selected">Select</option>
                                    <?php
                                    foreach ($pos_list as $k => $value) {
                                        echo '<option label="' . $value . '" value="' . $k . '" ' . set_value('revised_pos', ((!empty($form_data)) ? (($form_data['revised_pos'] == $k) ? 'selected' : '') : '')) . '>' . $value . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col form-group">
                                <label for="">Supply Type</label>
                                <input name="supply_type" value="<?= set_value('supply_type', ((!empty($form_data['supply_type'])) ? $form_data['supply_type'] : '')); ?>" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">GSTIN of e-commerce operator</label>
                                <input name="e_gstin" value="<?= set_value('e_gstin', ((!empty($form_data['e_gstin'])) ? $form_data['e_gstin'] : '')); ?>" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <h6>Item Details</h6>
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
                                <td>
                                    <input type="text" name="zper[tax_value]" class="form-control" placeholder=""
                                           value="<?= set_value('zper[tax_value]', ((!empty($form_data['zper'])) ? $form_data['zper']['tax_value'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="zper[integrated_tax]" class="form-control" placeholder=""
                                           value="<?= set_value('zper[integrated_tax]', ((!empty($form_data['zper'])) ? $form_data['zper']['integrated_tax'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="zper[cess]" class="form-control" placeholder=""
                                           value="<?= set_value('zper[cess]', ((!empty($form_data['zper'])) ? $form_data['zper']['cess'] : '')); ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>0.1%</td>
                                <td>
                                    <input type="text" name="p1per[tax_value]" class="form-control"
                                           value="<?= set_value('p1per[tax_value]', ((!empty($form_data['p1per'])) ? $form_data['p1per']['tax_value'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="p1per[integrated_tax]" class="form-control" placeholder=""
                                           value="<?= set_value('p1per[integrated_tax]', ((!empty($form_data['p1per'])) ? $form_data['p1per']['integrated_tax'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="p1per[cess]" class="form-control" placeholder=""
                                           value="<?= set_value('p1per[cess]', ((!empty($form_data['p1per'])) ? $form_data['p1per']['cess'] : '')); ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>0.25%</td>
                                <td>
                                    <input type="text" name="p25per[tax_value]" class="form-control" placeholder=""
                                           value="<?= set_value('p25per[tax_value]', ((!empty($form_data['p25per'])) ? $form_data['p25per']['tax_value'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="p25per[integrated_tax]" class="form-control" placeholder=""
                                           value="<?= set_value('p25per[integrated_tax]', ((!empty($form_data['p25per'])) ? $form_data['p25per']['integrated_tax'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="p25per[cess]" class="form-control" placeholder=""
                                           value="<?= set_value('p25per[cess]', ((!empty($form_data['p25per'])) ? $form_data['p25per']['cess'] : '')); ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>1%</td>
                                <td>
                                    <input type="text" name="onePer[tax_value]" class="form-control" placeholder=""
                                           value="<?= set_value('onePer[tax_value]', ((!empty($form_data['onePer'])) ? $form_data['onePer']['tax_value'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="onePer[integrated_tax]" class="form-control" placeholder=""
                                           value="<?= set_value('onePer[integrated_tax]', ((!empty($form_data['onePer'])) ? $form_data['onePer']['integrated_tax'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="onePer[cess]" class="form-control" placeholder=""
                                           value="<?= set_value('onePer[cess]', ((!empty($form_data['onePer'])) ? $form_data['onePer']['cess'] : '')); ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>1.5%</td>
                                <td>
                                    <input type="text" name="onep5per[tax_value]" class="form-control" placeholder=""
                                           value="<?= set_value('onep5per[tax_value]', ((!empty($form_data['onep5per'])) ? $form_data['onep5per']['tax_value'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="onep5per[integrated_tax]" class="form-control" placeholder=""
                                           value="<?= set_value('onep5per[integrated_tax]', ((!empty($form_data['onep5per'])) ? $form_data['onep5per']['integrated_tax'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="onep5per[cess]" class="form-control" placeholder=""
                                           value="<?= set_value('onep5per[cess]', ((!empty($form_data['onep5per'])) ? $form_data['onep5per']['cess'] : '')); ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>3%</td>
                                <td>
                                    <input type="text" name="threePer[tax_value]" class="form-control" placeholder=""
                                           value="<?= set_value('threePer[tax_value]', ((!empty($form_data['threePer'])) ? $form_data['threePer']['tax_value'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="threePer[integrated_tax]" class="form-control" placeholder=""
                                           value="<?= set_value('threePer[integrated_tax]', ((!empty($form_data['threePer'])) ? $form_data['threePer']['integrated_tax'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="threePer[cess]" class="form-control" placeholder=""
                                           value="<?= set_value('threePer[cess]', ((!empty($form_data['threePer'])) ? $form_data['threePer']['cess'] : '')); ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>5%</td>
                                <td>
                                    <input type="text" name="fivePer[tax_value]" class="form-control" placeholder=""
                                           value="<?= set_value('fivePer[tax_value]', ((!empty($form_data['fivePer'])) ? $form_data['fivePer']['tax_value'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="fivePer[integrated_tax]" class="form-control" placeholder=""
                                           value="<?= set_value('fivePer[integrated_tax]', ((!empty($form_data['fivePer'])) ? $form_data['fivePer']['integrated_tax'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="fivePer[cess]" class="form-control" placeholder=""
                                           value="<?= set_value('fivePer[cess]', ((!empty($form_data['fivePer'])) ? $form_data['fivePer']['cess'] : '')); ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>7.5%</td>
                                <td>
                                    <input type="text" name="sevenP5Per[tax_value]" class="form-control" placeholder=""
                                           value="<?= set_value('sevenP5Per[tax_value]', ((!empty($form_data['sevenP5Per'])) ? $form_data['sevenP5Per']['tax_value'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="sevenP5Per[integrated_tax]" class="form-control" placeholder=""
                                           value="<?= set_value('sevenP5Per[integrated_tax]', ((!empty($form_data['sevenP5Per'])) ? $form_data['sevenP5Per']['integrated_tax'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="sevenP5Per[cess]" class="form-control" placeholder=""
                                           value="<?= set_value('sevenP5Per[cess]', ((!empty($form_data['sevenP5Per'])) ? $form_data['sevenP5Per']['cess'] : '')); ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>12%</td>
                                <td>
                                    <input type="text" name="twlvePer[tax_value]" class="form-control" placeholder=""
                                           value="<?= set_value('twlvePer[tax_value]', ((!empty($form_data['twlvePer'])) ? $form_data['twlvePer']['tax_value'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="twlvePer[integrated_tax]" class="form-control" placeholder=""
                                           value="<?= set_value('twlvePer[integrated_tax]', ((!empty($form_data['twlvePer'])) ? $form_data['twlvePer']['integrated_tax'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="twlvePer[cess]" class="form-control" placeholder=""
                                           value="<?= set_value('twlvePer[cess]', ((!empty($form_data['twlvePer'])) ? $form_data['twlvePer']['cess'] : '')); ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>18%</td>
                                <td>
                                    <input type="text" name="eitnnPercent[tax_value]" class="form-control" placeholder=""
                                           value="<?= set_value('eitnnPercent[tax_value]', ((!empty($form_data['eitnnPercent'])) ? $form_data['eitnnPercent']['tax_value'] : '')); ?>"
                                           value="<?php if (isset($eitnnPercent)) echo $eitnnPercent['tax_value']; ?>">
                                </td>
                                <td>
                                    <input type="text" name="eitnnPercent[integrated_tax]" class="form-control" placeholder=""
                                           value="<?= set_value('eitnnPercent[integrated_tax]', ((!empty($form_data['eitnnPercent'])) ? $form_data['eitnnPercent']['integrated_tax'] : '')); ?>"
                                           value="<?php if (isset($eitnnPercent)) echo $eitnnPercent['integrated_tax']; ?>">
                                </td>
                                <td>
                                    <input type="text" name="eitnnPercent[cess]" class="form-control" placeholder=""
                                           value="<?= set_value('eitnnPercent[cess]', ((!empty($form_data['eitnnPercent'])) ? $form_data['eitnnPercent']['cess'] : '')); ?>"
                                           value="<?php if (isset($eitnnPercent)) echo $eitnnPercent['cess']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>28%</td>
                                <td>
                                    <input type="text" name="twoEightPer[tax_value]" class="form-control" placeholder=""  
                                           value="<?= set_value('twoEightPer[tax_value]', ((!empty($form_data['twoEightPer'])) ? $form_data['twoEightPer']['tax_value'] : '')); ?>">
                                </td>
                                <td>
                                    <input type="text" name="twoEightPer[integrated_tax]" class="form-control" placeholder="" 
                                           value="<?= set_value('twoEightPer[integrated_tax]', ((!empty($form_data['twoEightPer'])) ? $form_data['twoEightPer']['integrated_tax'] : '')); ?>" >
                                </td>
                                <td>
                                    <input type="text" name="twoEightPer[cess]" class="form-control" placeholder=""  
                                           value="<?= set_value('twoEightPer[cess]', ((!empty($form_data['twoEightPer'])) ? $form_data['twoEightPer']['cess'] : '')); ?>">
                                </td>
                            </tr>
                            <input type="hidden" name="item_detail_id" id="item_detail_id">
                        </table>
                        <button type="submit" class="btn btn-primary">Save Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>