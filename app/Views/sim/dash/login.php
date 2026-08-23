<?= $this->extend('sim/layouts/main'); ?>

<?= $this->section('main_content'); ?>
<div class="content-wrapper">
    <div class="container">
        <div class="mypage">
            <!-- breadcrumbs -->
            <div class="row" data-ng-controller="transctrl" data-ng-init="init('services')">
                <div class="col-xs-10">
                    <div data-breadcrumb="" data-path="//www.gst.gov.in/" data-name="Home">
                        <ol class="breadcrumb" data-ng-controller="crumbCtrl">
                            <li><a target="" href="javascript:void(0)" data-ng-bind="name">Home</a></li>
                            <li data-ng-repeat="breadcrumb in breadcrumbs.getAll()">
                                <ng-switch on="$last"><span ng-switch-when="true">Login</span></ng-switch>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs ends -->

            <div class="content-pane" style="min-height: 433.2px;">
                <div data-ng-view="">
                    <div class="row">
                        <div class="col-sm-offset-2 col-md-offset-3 col-md-6 col-sm-8 col-xs-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4 class="mar-t-0" data-ng-bind="trans.HEAD_LOGIN">Login</h4>
                                    <hr>
                                    <p class="mand-text" data-ng-bind="trans.HLP_MAND_FIELD">indicates mandatory fields</p>
                                    <form action="">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <label for="" class="m-cir reg">Username</label>
                                                <input type="text" class="form-control pad-r-0 ng-pristine ng-empty" placeholder="Enter Username">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <label for="" class="m-cir reg">Password</label>
                                                <input type="password" class="form-control pad-r-0 ng-pristine ng-empty" placeholder="Enter Password">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <button type="submit" class="btn  btn-primary" data-ng-bind="trans.HEAD_LOGIN">Login</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <a class="link" href="javascript:void(0)" data-ng-bind="trans.HEAD_FORGT_USERNAME">Forgot Username</a>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="pull-right">
                                                    <a class="link" href="javascript:void(0)" data-ng-bind="trans.HEAD_FORGT_PWD">Forgot Password</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p class="help-block"><i class="fa fa-info-circle"></i><strong> First time login:</strong> If you are logging in for the first time, click <a href="javascript:void(0)"><u>here</u></a> to log in.</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
