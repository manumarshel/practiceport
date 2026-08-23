<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="page-header">
                    <h2 class="header-title">Add New Question</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="add-company.html" class="breadcrumb-item active"><i class="anticon anticon-file-unknown m-r-5"></i>Question Details</a>
                            <a class="breadcrumb-item" href="add-company-gstr1.html">GSTR1 Data</a>
                            <a class="breadcrumb-item" href="add-company-gstr3b.html">GSTR3B Data</a>
                            <a class="breadcrumb-item" href="add-company-payment.html">Payment Details</a>
                        </nav>
                    </div>
                </div>
                <!-- <div class="d-flex justify-content-between align-items-center">
                    <h5>Companies</h5>
                    <div>
                        <a href="javascript:void(0);" class="btn btn-sm btn-primary">Add New</a>
                    </div>
                </div> -->
                <div class="m-t-30">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if (isset($validation)): ?>
                                <div class="col-12">
                                    <div class="alert alert-danger" role="alert">
                                        <?= $validation->listErrors() ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php
                            $question_id = '';
                            $question = '';
                            $category = '';
                            $question_type = '';
                            $company_id = '';
                            $emp_code='';
                            $ip_contribution='';
                            $emp_contribution='';
                            $tax_person_id='';
                            $vat_type='';
                            if (isset($question_) && !empty($question_)):

                                $question_id = $question_['question_id'];
                                $question = $question_['question'];
                                $category = $question_['category'];
                                $question_type = $question_['question_type'];
                                $company_id = $question_['company_id'];
                                $emp_code = $question_['emp_code'];
                                 $ip_contribution=$question_['ip_contribution'];
                                $emp_contribution=$question_['emp_contribution'];
                                $tax_person_id=$question_['tax_person_id'];
                                $vat_type=$question_['vat_type'];
                            endif;
                            ?>
                                <?php if (isset($question_) && !empty($question_)): ?>
                                <form action="<?= base_url(); ?>/admin/add-question/<?= $question_id; ?>" method="post" class="form" enctype="multipart/form-data" id="questionForm">
                                    <?php else: ?>
                                    <form action="add-question" method="post" class="form" enctype="multipart/form-data" id="questionForm">
<?php endif; ?>
                                    <div class="form-group">
                                        <label for="">Question</label>
                                        <textarea name="question" id="question" cols="10" rows="4" class="form-control"><?= $question; ?></textarea>
    <!--                                    <input type="text" name="" class="form-control">-->
                                    </div>
                                    <div class="form-group">
                                        <label for="">Category</label>
                                        <select name="category" id="category" class="form-control" onchange="showDiv(this.value);">
                                            
                                            <option value="1" <?php if ($category === '1') echo "selected"; ?>>GSTR1</option>
                                            <option value="2" <?php if ($category === '2') echo "selected"; ?>>GSTR3B</option>
                                            <option value="3" <?php if ($category === '3') echo "selected"; ?>>TDS</option>
                                            <option value="8" <?php if ($category === '8') echo "selected"; ?>>Eway Bill</option>
                                            <!--<option value="efiling" <?php if ($category === 'efiling') echo "selected"; ?>>TDS Filing</option>-->
                                            <option value="9" <?php if ($category === '9') echo "selected"; ?>>ESIC</option>
                                            <option value="10" <?php if ($category === '10') echo "selected"; ?>>PF</option>
                                            
                                            <option value="11" <?php if ($category === '11') echo "selected"; ?>>VAT</option>
                                             <option value="12" <?php if ($category === '12') echo "selected"; ?>>ACCOUNTING</option>  
                                        </select>
                                    </div>
                                    <!----- modification on 23-9-24 by geethu  ---------------->
                                    
                                    <?php if (isset($question_) && !empty($question_)): ?>
                                            <?php if($category == "10"){ ?>
                                     <div id="divEcrDownload" style="display:block;">
                                         <div class="form-group">
                                        <label for="">ECR Filing File (doc)</label>
                                         <div class="custom-file">
                                            <input type="file" name="ecr_file" class="form-control" id="ecr_file">
                                        </div>
                                    </div>
                                     </div>
                                     <?php }else{ ?>
                                     <div id="divEcrDownload" style="display:none;">
                                          <div class="form-group">
                                        <label for="">ECR Filing File (doc)</label>
                                         <div class="custom-file">
                                            <input type="file" name="ecr_file" class="form-control" id="ecr_file">
                                        </div>
                                         
                                    </div>
                                     </div>
                                     <?php } ?>
                                     
                                    
                                     
                                     <?php else: ?>
                                     
                                     <div id="divEcrDownload" style="display:none;">
                                     <div class="form-group">
                                        <label for="question1_data">ECR Filing File (doc)</label>
                                        <div class="custom-file">
                                            <input type="file" name="ecr_file" class="form-control" id="ecr_file">
                                        </div>
                                        
                                    </div>
                                     </div>
                                     
                                        
                                         
                                    <?php endif; ?>
                                    
                                      
                                     <div id="divsrum" style="display:none;">
                                         <div class="form-group">
                                            <label for="">SCRUM ZIP</label>
                                             <div class="custom-file">
                                                <input type="file" name="srum_file" class="form-control" id="srum_file">
                                            </div>
                                        </div>
                                     </div>
                                     
                                     
                                      <?php  if (isset($question_) && !empty($question_))
                                          { ?>
                                     <div id="divVat" style="display:show;">
                                         <?php }else{ ?>
                                            <div id="divVat" style="display:none;">
                                        <?php } ?>        
                                        <div class="form-group">
                                            <label for="">Vat Question Type</label>
                                            <select name="vat_type" id="vat_type" class="form-control">
                                                    <option value="1"  <?php if ($vat_type =="1") echo "selected"; ?>>Add Tax Person</option>
                                                    <option value="2" <?php if ($vat_type =="2") echo "selected"; ?>>Filing</option>
                                                    </select>
                                            </div>
                                         <div class="form-group">
                                            <label for="">Taxable person</label>
                                             <div class="">
                                                 
                                                <select name="tax_person_id" id="tax_person_id" class="form-control">
                                                    <option value="0">--Select-- </option>
                                            <?php
                                            if (isset($tax_persons)){
                                                foreach ($tax_persons as $person){
                                                    ?>
                                                    <option value="<?= $person['PKVatUserID']; ?>" <?php if ($person['PKVatUserID'] === $tax_person_id) echo "selected"; ?>><?= $person['vat_username']; ?></option>
                                                 <?php  } } ?>       
                                        </select>
                                            </div>
                                        </div>
                                     </div>
                                     
                                     
                                     
                                    <div class="form-group">
                                        <label for="Employee Code">Employee Code</label>
                                        <input type="text" maxlength="15" name="emp_code" class="form-control" id="emp_code" value="<?= $emp_code; ?>" onkeypress="return onlyNumbers(event)">
                                    </div>
                                    <?php if (isset($question_) && !empty($question_)): ?>
                                            <?php if($category == "9"){ ?>
                                            <div id="divContribution" style="display:block;">
                                            <?php }else{ ?>
                                            <div id="divContribution" style="display:none;">
                                             <?php } ?>
                                    <?php else: ?>
                                             <div id="divContribution" style="display:none;">
                                         
                                    <?php endif; ?>
                                     <div class="form-group">
                                        <label for="">IP Contributions</label> 
                                        <input type="number" name="ip_contribution" class="form-control" id="ip_contribution" value="<?= $ip_contribution; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Employer Contributions</label>
                                        <input type="number" name="emp_contribution" class="form-control" id="emp_contribution" value="<?= $emp_contribution; ?>">
                                    </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    <!----- modification on 23-9-24 by geethu  ---------------->
                                    <div class="form-group">
                                        <label for="">Question Type</label>
                                        <select name="question_type" id="question_type" class="form-control">
                                            <option value="easy" <?php if ($question_type === 'easy') echo "selected"; ?>>Easy</option>
                                            <option value="intermediate" <?php if ($question_type === 'intermediate') echo "selected"; ?>>Intermediate</option>
                                            <option value="advanced" <?php if ($question_type === 'advanced') echo "selected"; ?>>Advanced</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Select Company</label>
                                        <select name="company_id" id="company_id" class="form-control">
                                            <?php
                                            if (isset($companies)){
                                                foreach ($companies as $company){
                                                    ?>
                                                    <option value="<?= $company['company_id']; ?>" <?php if ($company['company_id'] === $company_id) echo "selected"; ?>><?= $company['name']; ?></option>
                                                 <?php  } } ?>       
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Data File</label>
                                        <div class="custom-file">
                                            <input type="file" name="question_data" class="custom-file-input" id="question_data">
                                            <label class="custom-file-label" for="question_data">Choose file</label>
                                        </div>
                                        <p class="upload-info"></p>
                                    </div>
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-tone">Save</button>
                                    <button type="submit" name="submit" value="submit_continue" class="btn btn-primary">Save & Continue</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.getElementById('questionForm').addEventListener('submit', function(event) {
    var category = document.getElementById('category').value;
    var ip_contribution = document.getElementById('ip_contribution').value;
    var emp_contribution = document.getElementById('emp_contribution').value;
    if (category === 'esi' && (ip_contribution === '' || ip_contribution < 0 )) {
        event.preventDefault(); // Prevent form submission
        alert('Please enter a IP contribution valid amount'); return false;
    }
    if (category === '9' && (emp_contribution === '' || emp_contribution < 0 )) {
        event.preventDefault(); // Prevent form submission
        alert('Please enter a Employer contribution valid amount');return false;
    }
});
function onlyNumbers(event) {
            var charCode = (event.which) ? event.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }

    function showDiv(id){
         var divContribution = document.getElementById("divContribution");
         var divsrum= document.getElementById("divsrum");
         var divVat= document.getElementById("divVat");
        if(id=="9"){
            divContribution.style.display = "block";
        }else{
              divContribution.style.display = "none";
        }
         var divContribution = document.getElementById("divEcrDownload");
        if(id=="10"){
            divContribution.style.display = "block";
        }else{
              divContribution.style.display = "none";
        }  
          if(id=="12"){
            divsrum.style.display = "block";
        }else{
              divsrum.style.display = "none";
        }  
        
          if(id=="11"){
            divVat.style.display = "block";
        }else{
              divVat.style.display = "none";
        }  
        
    }
</script>
<?= $this->endSection(); ?>

