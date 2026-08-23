<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/checkout/(:num)', 'Razorpay::index');
$routes->get('payment-form', 'RazorpayController::payWithRazorpay');
// Post Route For making Payment Request
$routes->post('payment', 'RazorpayController::processPayment');

$routes->group('admin', function ($routes) {
    $routes->add('', 'Admin/Authentication::index', ['filter' => 'noauth']);
    $routes->add('logout', 'Admin/Authentication::logout');
    $routes->add('dashboard', 'Admin/Dashboard::index', ['filter' => 'auth'] );
    $routes->add('users', 'Admin/Users::index', ['filter' => 'auth']);

    $routes->add('questions', 'Admin/Question::index', ['filter' => 'auth']);
    $routes->match(['get', 'post'], 'add-question', 'Admin/Question::add_question', ['filter' => 'auth']);
    $routes->match(['get', 'post'], 'add-question/(:num)', 'Admin/Question::add_question', ['filter' => 'auth']);
    $routes->match(['post'], 'delete-question', 'Admin/Question::delete', ['filter' => 'auth']);

    $routes->add('companies', 'Admin/Companies::index', ['filter' => 'auth']);
    $routes->match(['get', 'post'], 'add-company', 'Admin/Companies::add_company', ['filter' => 'auth']);
    $routes->match(['get', 'post'], 'add-company/(:num)', 'Admin/Companies::add_company', ['filter' => 'auth']);

    $routes->add('licenses', 'Admin/Licenses::index', ['filter' => 'auth']);
    $routes->match(['post'], 'add-license', 'Admin/Licenses::add', ['filter' => 'auth']);

    $routes->add('packages', 'Admin/Packages::index', ['filter' => 'auth']);
    $routes->match(['post', 'get'], 'add-packages', 'Admin/Packages::add', ['filter' => 'auth']);

    $routes->add('ads', 'Admin/Ads::index', ['filter' => 'auth']);
    $routes->match(['post', 'get'], 'add-ads', 'Admin/Ads::add', ['filter' => 'auth']);
//    $routes->match(['post'], 'delete-ad/(:num)', 'Admin/Ads::delete', ['filter' => 'auth']);


    $routes->add('videos', 'Admin/Videos::index', ['filter' => 'auth']);
    $routes->match(['post', 'get'], 'add-videos', 'Admin/Videos::add', ['filter' => 'auth']);
    $routes->match(['post', 'get'], 'update-videos', 'Admin/Videos::update', ['filter' => 'auth']);

    $routes->add('coupons', 'Admin/Coupons::index', ['filter' => 'auth']);
    $routes->match(['post', 'get'], 'add-coupons', 'Admin/Coupons::add', ['filter' => 'auth']);

    $routes->add('settings', 'Admin/Dashboard::settings', ['filter' => 'auth']);

    //gstr 1
    $routes->get('gstr1/(:num)', 'Admin/Gstr1/Gstr1Controller::index');
    $routes->get('gstr1/getTemplate', 'Admin/Gstr1/Gstr1Controller::getTemplate');
//    $routes->add('gstr1/gstr11', 'Admin/Gstr1/Gstr1Controller::gstr11');

    $routes->add('gstr1/b2b/(:num)', 'Admin/Gstr1/B2BController::index');
    $routes->add('gstr1/b2b/add-invoice/(:num)', 'Admin/Gstr1/B2BController::addInvoice');
    $routes->add('gstr1/b2b/add-invoice/(:num)/(:num)', 'Admin/Gstr1/B2BController::addInvoice');
    $routes->add('gstr1/b2b/remove', 'Admin/Gstr1/B2BController::remove');

    $routes->add('gstr1/b2cl/(:num)', 'Admin/Gstr1/B2CLController::index');
    $routes->add('gstr1/b2cl/add-invoice/(:num)', 'Admin/Gstr1/B2CLController::addInvoice');
    $routes->add('gstr1/b2cl/add-invoice/(:num)/(:num)', 'Admin/Gstr1/B2CLController::addInvoice');
    $routes->add('gstr1/b2cl/remove', 'Admin/Gstr1/B2CLController::remove');

    $routes->add('gstr1/cdnr/(:num)', 'Admin/Gstr1/CdnrController::index');
    $routes->add('gstr1/cdnr/receiver-upload/(:num)', 'Admin/Gstr1/CdnrController::receiverUpload');
    $routes->add('gstr1/cdnr/receiver-modified/(:num)', 'Admin/Gstr1/CdnrController::receiverModified');
    $routes->add('gstr1/cdnr/receiver-rejected/(:num)', 'Admin/Gstr1/CdnrController::receiverRejected');
    $routes->add('gstr1/cdnr/add/(:num)', 'Admin/Gstr1/CdnrController::add');
    $routes->add('gstr1/cdnr/upload-add/(:num)', 'Admin/Gstr1/CdnrController::add');
    $routes->add('gstr1/cdnr/modified-add/(:num)', 'Admin/Gstr1/CdnrController::add');
    $routes->add('gstr1/cdnr/rejected-add/(:num)', 'Admin/Gstr1/CdnrController::add');
    $routes->add('gstr1/cdnr/add/(:num)/(:num)', 'Admin/Gstr1/CdnrController::add');
    $routes->add('gstr1/cdnr/upload-add/(:num)/(:num)', 'Admin/Gstr1/CdnrController::add');
    $routes->add('gstr1/cdnr/modified-add/(:num)/(:num)', 'Admin/Gstr1/CdnrController::add');
    $routes->add('gstr1/cdnr/rejected-add/(:num)/(:num)', 'Admin/Gstr1/CdnrController::add');
    $routes->add('gstr1/cdnr/remove', 'Admin/Gstr1/CdnrController::remove');
    $routes->add('gstr1/cdnr/upload/remove', 'Admin/Gstr1/CdnrController::remove');
    $routes->add('gstr1/cdnr/modified/remove', 'Admin/Gstr1/CdnrController::remove');
    $routes->add('gstr1/cdnr/rejected/remove', 'Admin/Gstr1/CdnrController::remove');

    $routes->add('gstr1/cdnur/(:num)', 'Admin/Gstr1/CdnurController::index');
    $routes->add('gstr1/cdnur/add/(:num)', 'Admin/Gstr1/CdnurController::add');
    $routes->add('gstr1/cdnur/add/(:num)/(:num)', 'Admin/Gstr1/CdnurController::add');
    $routes->add('gstr1/cdnur/remove', 'Admin/Gstr1/CdnurController::remove');

    $routes->add('gstr1/export/(:num)', 'Admin/Gstr1/ExportController::index');
    $routes->add('gstr1/export/add/(:num)', 'Admin/Gstr1/ExportController::add');
    $routes->add('gstr1/export/add/(:num)/(:num)', 'Admin/Gstr1/ExportController::add');
    $routes->add('gstr1/export/remove', 'Admin/Gstr1/ExportController::remove');

    $routes->add('gstr1/b2b-amendment/(:num)', 'Admin/Gstr1/B2bAmendmentController::index');
    $routes->add('gstr1/b2b-amendment/receiver-upload/(:num)', 'Admin/Gstr1/B2bAmendmentController::receiverUpload');
    $routes->add('gstr1/b2b-amendment/receiver-modified/(:num)', 'Admin/Gstr1/B2bAmendmentController::receiverModified');
    $routes->add('gstr1/b2b-amendment/receiver-rejected/(:num)', 'Admin/Gstr1/B2bAmendmentController::receiverRejected');
    $routes->add('gstr1/b2b-amendment/add/(:num)', 'Admin/Gstr1/B2bAmendmentController::add');
    $routes->add('gstr1/b2b-amendment/upload-add/(:num)', 'Admin/Gstr1/B2bAmendmentController::add');
    $routes->add('gstr1/b2b-amendment/modified-add/(:num)', 'Admin/Gstr1/B2bAmendmentController::add');
    $routes->add('gstr1/b2b-amendment/rejected-add/(:num)', 'Admin/Gstr1/B2bAmendmentController::add');
    $routes->add('gstr1/b2b-amendment/add/(:num)/(:num)', 'Admin/Gstr1/B2bAmendmentController::add');
    $routes->add('gstr1/b2b-amendment/upload-add/(:num)/(:num)', 'Admin/Gstr1/B2bAmendmentController::add');
    $routes->add('gstr1/b2b-amendment/modified-add/(:num)/(:num)', 'Admin/Gstr1/B2bAmendmentController::add');
    $routes->add('gstr1/b2b-amendment/rejected-add/(:num)/(:num)', 'Admin/Gstr1/B2bAmendmentController::add');
    $routes->add('gstr1/b2b-amendment/remove', 'Admin/Gstr1/B2bAmendmentController::remove');
    $routes->add('gstr1/b2b-amendment/upload/remove', 'Admin/Gstr1/B2bAmendmentController::remove');
    $routes->add('gstr1/b2b-amendment/modified/remove', 'Admin/Gstr1/B2bAmendmentController::remove');
    $routes->add('gstr1/b2b-amendment/rejected/remove', 'Admin/Gstr1/B2bAmendmentController::remove');

    $routes->add('gstr1/b2cl-amendment/(:num)', 'Admin/Gstr1/B2clAmendmentController::index');
    $routes->add('gstr1/b2cl-amendment/add/(:num)', 'Admin/Gstr1/B2clAmendmentController::add');
    $routes->add('gstr1/b2cl-amendment/add/(:num)/(:num)', 'Admin/Gstr1/B2clAmendmentController::add');
    $routes->add('gstr1/b2cl-amendment/remove', 'Admin/Gstr1/B2clAmendmentController::remove');

    $routes->add('gstr1/export-amendment/(:num)', 'Admin/Gstr1/ExportAmendmentController::index');
    $routes->add('gstr1/export-amendment/add/(:num)', 'Admin/Gstr1/ExportAmendmentController::add');
    $routes->add('gstr1/export-amendment/add/(:num)/(:num)', 'Admin/Gstr1/ExportAmendmentController::add');
    $routes->add('gstr1/export-amendment/remove', 'Admin/Gstr1/ExportAmendmentController::remove');

    $routes->add('gstr1/cdn-amendment/(:num)', 'Admin/Gstr1/CdnAmendmentController::index');
    $routes->add('gstr1/cdn-amendment/receiver-upload/(:num)', 'Admin/Gstr1/CdnAmendmentController::receiverUpload');
    $routes->add('gstr1/cdn-amendment/receiver-modified/(:num)', 'Admin/Gstr1/CdnAmendmentController::receiverModified');
    $routes->add('gstr1/cdn-amendment/receiver-rejected/(:num)', 'Admin/Gstr1/CdnAmendmentController::receiverRejected');
    $routes->add('gstr1/cdn-amendment/add/(:num)', 'Admin/Gstr1/CdnAmendmentController::add');
    $routes->add('gstr1/cdn-amendment/upload-add/(:num)', 'Admin/Gstr1/CdnAmendmentController::add');
    $routes->add('gstr1/cdn-amendment/modified-add/(:num)', 'Admin/Gstr1/CdnAmendmentController::add');
    $routes->add('gstr1/cdn-amendment/rejected-add/(:num)', 'Admin/Gstr1/CdnAmendmentController::add');
    $routes->add('gstr1/cdn-amendment/add/(:num)/(:num)', 'Admin/Gstr1/CdnAmendmentController::add');
    $routes->add('gstr1/cdn-amendment/upload-add/(:num)/(:num)', 'Admin/Gstr1/CdnAmendmentController::add');
    $routes->add('gstr1/cdn-amendment/modified-add/(:num)/(:num)', 'Admin/Gstr1/CdnAmendmentController::add');
    $routes->add('gstr1/cdn-amendment/rejected-add/(:num)/(:num)', 'Admin/Gstr1/CdnAmendmentController::add');
    $routes->add('gstr1/cdn-amendment/remove', 'Admin/Gstr1/CdnAmendmentController::remove');
    $routes->add('gstr1/cdn-amendment/upload/remove', 'Admin/Gstr1/CdnAmendmentController::remove');
    $routes->add('gstr1/cdn-amendment/modified/remove', 'Admin/Gstr1/CdnAmendmentController::remove');
    $routes->add('gstr1/cdn-amendment/rejected/remove', 'Admin/Gstr1/CdnAmendmentController::remove');

    $routes->add('gstr1/cdnur-amendment/(:num)', 'Admin/Gstr1/CdnurAmendmentController::index');
    $routes->add('gstr1/cdnur-amendment/add/(:num)', 'Admin/Gstr1/CdnurAmendmentController::add');
    $routes->add('gstr1/cdnur-amendment/add/(:num)/(:num)', 'Admin/Gstr1/CdnurAmendmentController::add');
    $routes->add('gstr1/cdnur-amendment/remove', 'Admin/Gstr1/CdnurAmendmentController::remove');

    $routes->add('gstr1/b2cs/(:num)', 'Admin/Gstr1/B2csController::index');
    $routes->add('gstr1/b2cs/add/(:num)', 'Admin/Gstr1/B2csController::add');
    $routes->add('gstr1/b2cs/add/(:num)/(:num)', 'Admin/Gstr1/B2csController::add');
    $routes->add('gstr1/b2cs/remove', 'Admin/Gstr1/B2csController::remove');

    $routes->add('gstr1/b2cs/ecomm/(:num)', 'Admin/Gstr1/B2csController::ecomm');
    $routes->add('gstr1/b2cs/ecomm-add/(:num)', 'Admin/Gstr1/B2csController::ecommAdd');
    $routes->add('gstr1/b2cs/ecomm-add/(:num)/(:num)', 'Admin/Gstr1/B2csController::ecommAdd');
    $routes->add('gstr1/b2cs/ecomm-add/remove', 'Admin/Gstr1/B2csController::ecommRemove');

    $routes->add('gstr1/nil-rated/(:num)', 'Admin/Gstr1/NilRatedController::index');
//    $routes->add('gstr1/nil-rated/(:num)/(:num)', 'Admin/Gstr1/NilRatedController::index');

    $routes->add('gstr1/adv-tax/(:num)', 'Admin/Gstr1/AdvanceTaxController::index');
    $routes->add('gstr1/adv-tax/add/(:num)', 'Admin/Gstr1/AdvanceTaxController::add');
    $routes->add('gstr1/adv-tax/add/(:num)/(:num)', 'Admin/Gstr1/AdvanceTaxController::add');
    $routes->add('gstr1/adv-tax/remove', 'Admin/Gstr1/AdvanceTaxController::remove');

    $routes->add('gstr1/tax-paid/(:num)', 'Admin/Gstr1/TaxPaidController::index');
    $routes->add('gstr1/tax-paid/add/(:num)', 'Admin/Gstr1/TaxPaidController::add');
    $routes->add('gstr1/tax-paid/add/(:num)/(:num)', 'Admin/Gstr1/TaxPaidController::add');
    $routes->add('gstr1/tax-paid/remove', 'Admin/Gstr1/TaxPaidController::remove');

    $routes->add('gstr1/hsn/(:num)', 'Admin/Gstr1/HsnController::index');
    $routes->add('gstr1/hsn/add/(:num)', 'Admin/Gstr1/HsnController::add');
    $routes->add('gstr1/hsn/add/(:num)/(:num)', 'Admin/Gstr1/HsnController::add');
    $routes->add('gstr1/hsn/remove', 'Admin/Gstr1/HsnController::remove');

    $routes->add('gstr1/document/(:num)', 'Admin/Gstr1/DocumentController::index');

    $routes->add('gstr1/adv-tax-amendment/(:num)', 'Admin/Gstr1/AdvtaxAmendmentController::index');
    $routes->add('gstr1/adv-tax-amendment/add/(:num)', 'Admin/Gstr1/AdvtaxAmendmentController::add');
    $routes->add('gstr1/adv-tax-amendment/add/(:num)/(:num)', 'Admin/Gstr1/AdvtaxAmendmentController::add');
    $routes->add('gstr1/adv-tax-amendment/remove', 'Admin/Gstr1/AdvtaxAmendmentController::remove');
//till here
    $routes->add('gstr1/tax-paid-amendment/(:num)', 'Admin/Gstr1/TaxpaidAmendmentController::index');
    $routes->add('gstr1/tax-paid-amendment/add/(:num)', 'Admin/Gstr1/TaxpaidAmendmentController::add');
    $routes->add('gstr1/tax-paid-amendment/add/(:num)/(:num)', 'Admin/Gstr1/TaxpaidAmendmentController::add');
    $routes->add('gstr1/tax-paid-amendment/remove', 'Admin/Gstr1/TaxpaidAmendmentController::remove');

    $routes->add('gstr1/b2cs-amendment/(:num)', 'Admin/Gstr1/B2csAmendmentController::index');
    $routes->add('gstr1/b2cs-amendment/add/(:num)', 'Admin/Gstr1/B2csAmendmentController::add');
    $routes->add('gstr1/b2cs-amendment/add/(:num)/(:num)', 'Admin/Gstr1/B2csAmendmentController::add');
    $routes->add('gstr1/b2cs-amendment/remove', 'Admin/Gstr1/B2csAmendmentController::remove');

    $routes->add('gstr1/b2cs-amendment/ecomm/(:num)', 'Admin/Gstr1/B2csAmendmentController::ecomm');
    $routes->add('gstr1/b2cs-amendment/ecomm-add/(:num)', 'Admin/Gstr1/B2csAmendmentController::ecommAdd');
    $routes->add('gstr1/b2cs-amendment/ecomm-add/(:num)/(:num)', 'Admin/Gstr1/B2csAmendmentController::ecommAdd');
    $routes->add('gstr1/b2cs-amendment/ecomm-add/remove', 'Admin/Gstr1/B2csAmendmentController::ecommRemove');

//end - GSTR1
//start - GSTR3B
    $routes->add('gstr3b/eligible-itc/(:num)', 'Admin/Gstr3b/EligibleITCController::index');
    $routes->add('gstr3b/(:num)', 'Admin/Gstr3b/Gstr3bController::index');
    $routes->add('gstr3b/insterest-late-fee/(:num)', 'Admin/Gstr3b/InterestLateFeeController::index');
    $routes->add('gstr3b/inter-statement-supplies/(:num)', 'Admin/Gstr3b/InterstatesuppliesController::index');
    $routes->add('gstr3b/inward-supplies/(:num)', 'Admin/Gstr3b/InwardSuppliesController::index');
    $routes->add('gstr3b/iosup/(:num)', 'Admin/Gstr3b/IosupController::index');
    $routes->add('gstr3b/payment/(:num)', 'Admin/Gstr3b/PaymentController::index');
    $routes->add('gstr3b/payment2/(:num)', 'Admin/Gstr3b/Payment2Controller::index');
    $routes->add('gstr3b/system-summary/(:num)', 'Admin/Gstr3b/SystemSummaryGstr3bController::index');
//    $routes->add('_gstr1/(:num)', 'Admin/Gstr1::add', ['filter' => 'auth']);
//    $routes->add('_gstr1/edit/(:num)', 'Admin/Gstr1::edit', ['filter' => 'auth']);
//    $routes->add('gstr3B', 'Admin/Gstr3b::index', ['filter' => 'auth']);

//    $routes->add('dashboard/(:any)/(:any)', 'Admin/Dashboard::home/$1/$2');
});

$routes->group('user', function ($routes) {
    $routes->add('', 'User/Authentication::index', ['filter' => 'user_noauth']);//
    $routes->add('create', 'User/Authentication::create_user');//['filter' => 'user_noauth']
    $routes->add('logout', 'User/Authentication::logout');
    $routes->add('forgot', 'User/Authentication::forgot', ['filter' => 'user_noauth']);
    $routes->match(['get', 'post'],'reset-password', 'User/Authentication::reset_password', ['filter' => 'user_auth']);
    $routes->add('dashboard', 'User/Dashboard::index', ['filter' => 'user_auth'] );

    $routes->add('questions', 'User/Question::index', ['filter' => 'user_auth']);

    $routes->add('packages', 'User/Packages::index', ['filter' => 'user_auth']);

    $routes->add('settings', 'User/Dashboard::settings', ['filter' => 'user_auth']);

//    $routes->add('dashboard/(:any)/(:any)', 'Admin/Dashboard::home/$1/$2');
});

$routes->group('simulation', function ($routes) {
    $routes->add('', 'Sim/Authentication::index', ['filter' => 'sim_noauth']);//
    $routes->add('logout', 'Sim/Authentication::logout');
    $routes->add('gstr1-process', 'Sim/Gstr1::process');
    $routes->add('check-period', 'Sim/CheckPeriod::process');

    $routes->add('return-filing-gstr1', 'Sim/Gstr1::return_filing_gstr1');
    $routes->add('return-filing-gstr3b', 'Sim/Gstr3b::return_filing_gstr3b');
    $routes->add('create-challan', 'Sim/Gstr3b::create_challan');

    $routes->add('dashboard/(:num)', 'Sim/Dash/Dashboard::index', ['filter' => 'sim_auth']);
    $routes->add('returns-dashboard', 'Sim/Dash/ReturnsDashboard::index',  ['filter' => 'sim_auth']);
    $routes->add('gstr1', 'Sim/Dash/Dashboard::gstr1',  ['filter' => 'sim_auth']);
    $routes->get('gstr1/getTemplate', 'Sim/Gstr1::getTemplate');


    $routes->add('b2b', 'Sim/b2b/B2b::index',  ['filter' => 'sim_auth']);
    $routes->add('b2b-add-invoice', 'Sim/b2b/B2b::add_invoice',  ['filter' => 'sim_auth']);
    $routes->add('b2b-process', 'Sim/b2b/B2b::process');

    $routes->add('b2cl', 'Sim/b2cl/B2cl::index', ['filter' => 'sim_auth']);
    $routes->add('b2cl-add-invoice', 'Sim/b2cl/B2cl::add_invoice', ['filter' => 'sim_auth']);

    $routes->add('cdnr', 'Sim/cdnr/Cdnr::index');
    $routes->add('cdnr-receiver-uploded', 'Sim/cdnr/Cdnr::cdnr_receiver_uploded');
    $routes->add('cdnr-receiver-modified', 'Sim/cdnr/Cdnr::cdnr_receiver_modified');
    $routes->add('cdnr-receiver-rejected', 'Sim/cdnr/Cdnr::cdnr_receiver_rejected');
    $routes->add('cdnr-add', 'Sim/cdnr/Cdnr::cdnr_add');

    $routes->add('cdnur', 'Sim/cdnur/Cdnur::index');
//    $routes->add('cdnur-receiver-uploded', 'Sim/cdnur/Cdnur::cdnur_receiver_uploded');
//    $routes->add('cdnur-receiver-modified', 'Sim/cdnur/Cdnur::cdnur_receiver_modified');
//    $routes->add('cdnur-receiver-rejected', 'Sim/cdnur/Cdnur::cdnur_receiver_rejected');
    $routes->add('cdnur-add', 'Sim/cdnur/Cdnur::cdnur_add');

    $routes->add('export', 'Sim/export/Export::index');
    $routes->add('export-add', 'Sim/export/Export::export_add');


    $routes->add('b2b-amendment', 'Sim/B2bAmendment/B2bAmendment::index');
    $routes->add('b2b-amendment-receiver-uploded', 'Sim/B2bAmendment/B2bAmendment::b2b_amendment_receiver_uploded');
    $routes->add('b2b-amendment-receiver-modified', 'Sim/B2bAmendment/B2bAmendment::b2b_amendment_receiver_modified');
    $routes->add('b2b-amendment-receiver-rejected', 'Sim/B2bAmendment/B2bAmendment::b2b_amendment_receiver_rejected');

    $routes->add('b2cl-amendment', 'Sim/B2clAmendment::index');
    $routes->add('export-amendment', 'Sim/ExportAmendment::index');


    $routes->add('cdnr-amendment', 'Sim/CdnAmendment/CdnAmendment::index');
    $routes->add('cdnr-amendment-receiver-uploded', 'Sim/CdnAmendment/CdnAmendment::cdn_amendment_receiver_uploded');
    $routes->add('cdnr-amendment-receiver-modified', 'Sim/CdnAmendment/CdnAmendment::cdn_amendment_receiver_modified');
    $routes->add('cdnr-amendment-receiver-rejected', 'Sim/CdnAmendment/CdnAmendment::cdn_amendment_receiver_rejected');


    $routes->add('cdnur-amendment', 'Sim/CdnurAmendment::index');

    $routes->add('b2cs', 'Sim/b2cs/B2cs::index');
    $routes->add('b2cs-add', 'Sim/b2cs/B2cs::b2cs_add');

    $routes->add('nil-rated', 'Sim/NilRated::index');

    $routes->add('advtax', 'Sim/advtax/Advtax::index');
    $routes->add('advtax-liability-add', 'Sim/advtax/Advtax::advtax_liability_add');

    $routes->add('taxpaid', 'Sim/taxpaid/TaxPaid::index');
    $routes->add('taxpaid-add', 'Sim/taxpaid/TaxPaid::taxpaid_add');

    $routes->add('hsn', 'Sim/Hsn::index');
    $routes->add('document', 'Sim/Document::index');
    $routes->add('process-document', 'Sim/Document::process_document');
    $routes->add('advtax-amendment', 'Sim/AdvtaxAmendment::index');
    $routes->add('taxpaid-amendment', 'Sim/TaxpaidAmendment::index');

    $routes->add('b2cs-amendment', 'Sim/B2csAmendment/B2csAmendment::index');
    $routes->add('b2cs-ecomm-amendment', 'Sim/B2csAmendment/B2csAmendment::b2cs_ecomm_amendment');

    $routes->add('gstr3B', 'Sim/Gstr3b::index');
    $routes->add('gstr3b-process', 'Sim/Gstr3b::process');
    $routes->add('iosup', 'Sim/Iosup::index');
    $routes->add('interstatesupplies', 'Sim/Interstatesupplies::index');
    $routes->add('eligible-ITC', 'Sim/EligibleITC::index');
    $routes->add('inward-supplies', 'Sim/InwardSupplies::index');
    $routes->add('interestLateFee', 'Sim/InterestLateFee::index');
    $routes->add('payment', 'Sim/Payment::index');

//    Amendment Add
    $routes->add('b2b-amendment-add', 'Sim/B2bAmendment/B2bAmendment::b2b_amendment_add');
    $routes->add('b2cl-amendment-add', 'Sim/B2clAmendment::b2cl_amendment_add');
    $routes->add('cdnr-amendment-add/', 'Sim/CdnAmendment/CdnAmendment::cdn_amendment_add');
    $routes->add('cdnur-amendment-add/', 'Sim/CdnurAmendment::cdnur_amendment_add');
    $routes->add('export-amendment-add/', 'Sim/ExportAmendment::export_amendment_add');
    $routes->add('b2cs-amendment-add', 'Sim/B2csAmendment/B2csAmendment::b2cs_amendment_add');
    $routes->add('advtax-amendment-add', 'Sim/AdvtaxAmendment::advtax_amendment_add');
    $routes->add('taxpaid-amendment-add', 'Sim/TaxpaidAmendment::taxpaid_amendment_add');


    //    $routes->match(['get', 'post'], 'add-company', 'User/Companies::add_company', ['filter' => 'auth']);
//    $routes->match(['get', 'post'], 'add-company', 'Sim/Companies::add_company');
});

$routes->add('eway-load/(:num)', 'Eway/Authentication::index');//
$routes->add('efiling-load/(:num)', 'EFiling/Authentication::index');//
$routes->add('esi-load/(:num)', 'Esi/Authentication::index');//

$routes->group('eway-simulation', function ($routes) {
    $routes->add('', 'Eway/Authentication::login');//
    $routes->add('logout', 'Eway/Authentication::logout');//
    $routes->add('dashboard', 'Eway/Dashboard::index');
    $routes->add('generate-bill', 'Eway/GenerateBill::index');
    $routes->add('get-doc-type', 'Eway/GenerateBill::getDocType');
    $routes->add('get-default-gstin', 'Eway/GenerateBill::getUserGSTNDefaultPlace');
    $routes->add('get-state-info-by-pin', 'Eway/GenerateBill::getStateinfoByPin');
    $routes->add('get-matched-client-names', 'Eway/GenerateBill::getMatchedClientNames');
    $routes->add('get-gst-details-with-doc-type', 'Eway/GenerateBill::getGSTNDetailsWithDocDtType');
    $routes->add('get-auto-distance', 'Eway/GenerateBill::getAutoDistance');
    $routes->add('is-sez', 'Eway/GenerateBill::isSez');
    $routes->add('get-matched-user-names', 'Eway/GenerateBill::getMatchedUserProductNames');
    $routes->add('check-non-advol-flag', 'Eway/GenerateBill::checkNonAdvolFlag');
    $routes->add('assign-items', 'Eway/GenerateBill::assignItems');
    $routes->add('get-matched-transport-names', 'Eway/GenerateBill::getMatchedTransporterNames');
    $routes->add('get-vehicle-details', 'Eway/GenerateBill::getVehicleDetails');
    $routes->add('get-unit-code', 'Eway/GenerateBill::getUnitCode');
    $routes->add('check-duplicate-value', 'Eway/GenerateBill::checkDuplicateInvoice');
    $routes->add('save-bill-details', 'Eway/GenerateBill::saveBillDetails');
    $routes->add('print-bill', 'Eway/GenerateBill::printBill');
    $routes->add('print-detail-bill', 'Eway/GenerateBill::printDetailBill');
});

$routes->group('e-filing', function ($routes) {
    $routes->add('', 'EFiling/Authentication::login');//
    $routes->add('logout', 'EFiling/Authentication::logout');//
    $routes->add('dashboard', 'EFiling/Dashboard::index');
    $routes->add('epaytax', 'EFiling/EpayTax::index');
    $routes->add('new-epaytax', 'EFiling/EpayTax::addNewEpayTax');
    $routes->add('edit-epaytax/(:num)', 'EFiling/EpayTax::editNewEpayTax');
    $routes->add('delete-epaytax/(:num)', 'EFiling/EpayTax::deleteNewEpayTax');
    $routes->add('new-epaytax-payment-nature', 'EFiling/EpayTax::newEpayTaxPaymentNature');
    $routes->add('edit-epaytax-payment-nature/(:num)', 'EFiling/EpayTax::editEpayTaxPaymentNature');
    $routes->add('new-epaytax-breakup', 'EFiling/EpayTax::newEpayTaxBreakup');
    $routes->add('edit-epaytax-breakup/(:num)', 'EFiling/EpayTax::editEpayTaxBreakup');
    $routes->add('new-epaytax-submit', 'EFiling/EpayTax::newEpayTaxSubmit');
    $routes->add('edit-epaytax-submit/(:num)', 'EFiling/EpayTax::editEpayTaxSubmit');
    $routes->add('income-tax-receipt/(:num)', 'EFiling/EpayTax::newEpayTaxReceipt');
    $routes->add('income-tax-detail/(:num)', 'EFiling/EpayTax::newEpayTaxDetail');

    $routes->add('income-tax', 'EFiling/IncomeTax::index');
    $routes->add('tax-instruction', 'EFiling/IncomeTax::instruction');
    $routes->add('new-tds', 'EFiling/IncomeTax::addNewTds');
    $routes->add('tax-submit', 'EFiling/IncomeTax::newTaxSubmit');
    $routes->add('tds-e-verify/(:num)', 'EFiling/IncomeTax::tdsEverify');
    $routes->add('verify-submit', 'EFiling/IncomeTax::verifySubmit');
    $routes->add('everify-success/(:num)', 'EFiling/IncomeTax::everifySuccess');
    $routes->add('filed-forms', 'EFiling/IncomeTax::filedForms');
    $routes->add('filed-forms-view/(:num)', 'EFiling/IncomeTax::filedFormsView');
    $routes->add('filed-forms-details', 'EFiling/IncomeTax::filedFormsDetails');
});

$routes->group('esi', function ($routes) {
    $routes->add('', 'Esi/Authentication::login');//
    $routes->add('dashboard', 'Esi/Dashboard::index');
    $routes->group('employee', function ($routes) {
        $routes->add('register', 'Esi/Employee::register');
        $routes->add('registered-employees', 'Esi/Employee::registeredEmployees');
    });
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
