<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>HSN-wise summary of outward supplies - Add Details</h5>
                </div>
                <div class="m-t-30">
                    <form id="form_validation" action="<?= base_url() . '/admin/gstr1/hsn/add/' . $question_id; ?>" method="post"  class="form">
                        <input type="hidden" name="question_id" value="<?= $question_id; ?>" /> 
                        <input type="hidden" name="pk_id" value="<?= $pk_id; ?>" />
                        <div class="row">
                            <div class="col form-group">
                                <label for="">HSN </label>
                                <input type="text" name="hsn" value="<?= set_value('hsn', ((!empty($form_data)) ? $form_data->hsn : '')); ?>" class="form-control" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Description</label>
                                <input type="text" name="description" value="<?= set_value('description', ((!empty($form_data)) ? $form_data->description : '')); ?>" class="form-control" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">UQC</label>
                                <input type="text" name="uqc" value="<?= set_value('uqc', ((!empty($form_data)) ? $form_data->uqc : '')); ?>" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Total Quantity </label>
                                <input type="text" name="total_quantity" value="<?= set_value('total_quantity', ((!empty($form_data)) ? $form_data->total_quantity : '')); ?>" class="form-control" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Total value (₹)</label>
                                <input type="text" name="rate" value="<?= set_value('rate', ((!empty($form_data)) ? $form_data->rate : '')); ?>" class="form-control" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Total taxable value (₹)</label>
                                <input type="text" name="total_taxable_value" value="<?= set_value('total_taxable_value', ((!empty($form_data)) ? $form_data->total_taxable_value : '')); ?>" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Integrated tax (₹) </label>
                                <input type="text" name="integrated_tax" value="<?= set_value('integrated_tax', ((!empty($form_data)) ? $form_data->integrated_tax : '')); ?>" class="form-control" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">Central tax (₹)</label>
                                <input type="text" name="central_tax" value="<?= set_value('central_tax', ((!empty($form_data)) ? $form_data->central_tax : '')); ?>" class="form-control" placeholder="">
                            </div>
                            <div class="col form-group">
                                <label for="">State/UT tax (₹)</label>
                                <input type="text" name="state_tax" value="<?= set_value('state_tax', ((!empty($form_data)) ? $form_data->state_tax : '')); ?>" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="">Cess (₹)</label>
                                <input type="text" name="cess" value="<?= set_value('cess', ((!empty($form_data)) ? $form_data->cess : '')); ?>" class="form-control" placeholder="">
                            </div>
                            <div class="col"></div>
                            <div class="col"></div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>