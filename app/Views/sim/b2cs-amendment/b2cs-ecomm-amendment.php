<?= $this->extend('sim/layouts/main'); ?>

<?= $this->section('main_content'); ?>
<div class="content-wrapper">
    <div class="container">
        <div class="mypage">
            <div class="row" data-ng-controller="transctrl" data-ng-init="init('services')">
                <div class="col-xs-10">
                    <div data-breadcrumb="" data-path="//www.gst.gov.in/" data-name="Home">
                        <ol class="breadcrumb" data-ng-controller="crumbCtrl">
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">Dashboard</a></li>
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">Returns</a></li>
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">GSTR-1/IFF</a></li>
                            <li data-ng-repeat="breadcrumb in breadcrumbs.getAll()">
                                <ng-switch on="$last"><span ng-switch-when="true"> B2CSA</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row invsumm">
                <div class="col-xs-12 col-sm-8 ">
                    <h4>Amended B2C(Others) Details - Summary</h4>
                </div>
                <div class="col-sm-12 taxp">
                    <ul class="nav nav-tabs ret-tabs">
                        <li class="">
                            <a href="b2cs-amendment" class="ng-pristine ng-untouched ng-valid ng-not-empty">Other than E-Commerce</a>
                        </li>
                        <li class="active">
                            <a href="b2cs-ecomm-amendment" class="ng-pristine ng-untouched ng-valid ng-not-empty"> E-Commerce</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tabpane">
                <p class="mand-text">Indicates Mandatory Fields</p>
                <form>
                <div class="tbl-format rettbl-format">
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="fin" class="reg m-cir">Year</label>
                            <select name="financial_year" class="form-control ng-pristine ng-not-empty ng-valid ng-valid-required ng-touched"required="">
                                <option label="2021-22" value="2021-22" selected="selected">2021-22</option>
                                <option label="2020-21" value="2020-21">2020-21</option>
                            </select>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <label for="mon" class="reg m-cir">Month</label>
                            <select name="return_filing_period" class="form-control ng-pristine ng-untouched ng-not-empty ng-valid ng-valid-required"required="">
                                <option label="April" value="April">April</option>
                                <option label="May" value="May">May</option>
                                <option label="June" value="June">June</option>
                                <option label="July" value="July">July</option>
                                <option label="August" value="August" selected="selected">August</option>
                            </select>
                            <span class="err ng-hide">This information is required.</span>
                        </div>
                        <div class="col-sm-4">
                            <label class="reg m-cir" for="pos"><span>Original POS</span>
                                <i class="fa fa-info-circle" data-placement="top" aria-hidden="true"></i></label>
                            <select name="original_pos" class="form-control ng-pristine ng-valid ng-empty ng-touched" id="original_pos">
                                <option value="" disabled="" selected="selected">Select</option>
                                <option label="35-Andaman and Nicobar Islands" value="string:35">35-Andaman and Nicobar Islands</option>
                                <option label="37-Andhra Pradesh" value="string:37">37-Andhra Pradesh</option>
                                <option label="12-Arunachal Pradesh" value="string:12">12-Arunachal Pradesh</option>
                                <option label="18-Assam" value="string:18">18-Assam</option>
                                <option label="10-Bihar" value="string:10">10-Bihar</option>
                                <option label="04-Chandigarh" value="string:04">04-Chandigarh</option>
                                <option label="22-Chhattisgarh" value="string:22">22-Chhattisgarh</option>
                                <option label="26-Dadra and Nagar Haveli and Daman and Diu" value="string:26">26-Dadra and Nagar Haveli and Daman and Diu</option>
                                <option label="25-Daman and Diu" value="string:25">25-Daman and Diu</option>
                                <option label="07-Delhi" value="string:07">07-Delhi</option>
                                <option label="96-Foreign Country" value="string:96">96-Foreign Country</option>
                                <option label="30-Goa" value="string:30">30-Goa</option>
                                <option label="24-Gujarat" value="string:24">24-Gujarat</option>
                                <option label="06-Haryana" value="string:06">06-Haryana</option>
                                <option label="02-Himachal Pradesh" value="string:02">02-Himachal Pradesh</option>
                                <option label="01-Jammu and Kashmir" value="string:01">01-Jammu and Kashmir</option>
                                <option label="20-Jharkhand" value="string:20">20-Jharkhand</option>
                                <option label="29-Karnataka" value="string:29">29-Karnataka</option>
                                <option label="32-Kerala" value="string:32">32-Kerala</option>
                                <option label="38-Ladakh" value="string:38">38-Ladakh</option>
                                <option label="31-Lakshadweep" value="string:31">31-Lakshadweep</option>
                                <option label="23-Madhya Pradesh" value="string:23">23-Madhya Pradesh</option>
                                <option label="27-Maharashtra" value="string:27">27-Maharashtra</option>
                                <option label="14-Manipur" value="string:14">14-Manipur</option>
                                <option label="17-Meghalaya" value="string:17">17-Meghalaya</option>
                                <option label="15-Mizoram" value="string:15">15-Mizoram</option>
                                <option label="13-Nagaland" value="string:13">13-Nagaland</option>
                                <option label="21-Odisha" value="string:21">21-Odisha</option>
                                <option label="97-Other Territory" value="string:97">97-Other Territory</option>
                                <option label="34-Puducherry" value="string:34">34-Puducherry</option>
                                <option label="03-Punjab" value="string:03">03-Punjab</option>
                                <option label="08-Rajasthan" value="string:08">08-Rajasthan</option>
                                <option label="11-Sikkim" value="string:11">11-Sikkim</option>
                                <option label="33-Tamil Nadu" value="string:33">33-Tamil Nadu</option>
                                <option label="36-Telangana" value="string:36">36-Telangana</option>
                                <option label="16-Tripura" value="string:16">16-Tripura</option>
                                <option label="09-Uttar Pradesh" value="string:09">09-Uttar Pradesh</option>
                                <option label="05-Uttarakhand" value="string:05">05-Uttarakhand</option>
                                <option label="19-West Bengal" value="string:19">19-West Bengal</option>
                            </select>
                        </div>
                        <div class="col-sm-4 ng-hide">
                            <label class="reg m-cir" for="invval">Taxable value (₹)</label>
                            <input name="invval" class="form-control text-right ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" id="invval" required="">
                            <span class="err ng-hide">This information is required.</span>
                        </div>
                        <div class="col-sm-4 ng-hide">
                            <label class="reg" for="stype">Supply Type</label>
                            <input class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="supply_type" disabled="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <br>
                            <input type="checkbox" class="chkbx ng-pristine ng-untouched ng-valid ng-empty" id="rate_flag">
                            <label for="rate_flag">Is the supply eligible to be taxed at a differential percentage (%) of the
                                existing rate of tax, as notified by the Government?</label>
                        </div>
                        <div class="col-sm-3 ng-hide">
                            <span>Applicable % of Tax Rate</span>
                            <select class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" name="rate_prcnt" id="rate_prcnt" required="">
                                <option selected="" value="65">65%</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 has-error">
                            <label class="reg m-cir" for="ecomgstin">GSTIN of e-commerce operator</label>
                            <input name="e_gstin" class="form-control formedit ng-pristine ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-minlength ng-valid-maxlength ng-touched" id="e_gstin" required="">
                            <span class="err">This information is required.</span>
                            <span class="err ng-hide">Please enter a registered ctin</span>
                            <span class="err ng-hide">Receiver and seller cannot be same</span>
                        </div>
                    </div>
                    <div class="row ng-hide">
                        <div class="col-sm-4">
                            <label class="reg m-cir" for="rate">Rate</label>
                            <select class="form-control newinv formedit ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched" name="rate" title="category" required="" >
                                <option label="Select" value="" disabled="" selected="selected"></option>
                                <option label="0" value="number:0">0</option>
                                <option label="0.1" value="number:0.1">0.1</option>
                                <option label="0.25" value="number:0.25">0.25</option>
                                <option label="1" value="number:1">1</option>
                                <option label="1.5" value="number:1.5">1.5</option>
                                <option label="3" value="number:3">3</option>
                                <option label="5" value="number:5">5</option>
                                <option label="7.5" value="number:7.5">7.5</option>
                                <option label="12" value="number:12">12</option>
                                <option label="18" value="number:18">18</option>
                                <option label="28" value="number:28">28</option>
                            </select>
                            <span class="err ng-hide">This information is required.</span>
                        </div>
                    </div>

                </div>
                <div  class="row">
                    <div class="col-sm-12 col-xs-12 text-right next-tab-nav">
                        <button type="button" class="btn btn-default">Back</button>
                        <button type="submit" class="btn btn-primary accpt">Amend Details</button>
                    </div>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
