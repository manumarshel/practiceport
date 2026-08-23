<?= $this->extend('admin/layouts/main2'); ?>

<?= $this->section('main_content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="page-header">
                    <h2 class="header-title">Add New Company</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="#" class="breadcrumb-item"><i class="anticon anticon-project m-r-5"></i>Company Details</a>
                            <a class="breadcrumb-item " href="#">GSTR1 Data</a>
                            <a class="breadcrumb-item active" href="#">GSTR3B Data</a>
                            <a class="breadcrumb-item" href="#">Payment Details</a>
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
                        <div class="col-md-4">
                            <div class="list-group ">
                                <a href="#1" class="list-group-item list-group-item-action active">
                                    System generated summary for GSTR-3B
                                </a>
                                <a href="#2" class="list-group-item list-group-item-action">3.1 Details of Outward Supplies and inward supplies liable to reverse charge</a>
                                <a href="#3" class="list-group-item list-group-item-action">3.2 Inter State Supplies </a>
                                <a href="#4" class="list-group-item list-group-item-action">4. Eligible ITC</a>
                                <a href="#5" class="list-group-item list-group-item-action">5. Exempt, nil and Non GST inward supplies</a>
                                <a href="#6" class="list-group-item list-group-item-action">5.1 Interest & late fee payable</a>
                                <a href="#7" class="list-group-item list-group-item-action">6.1 Payment of tax</a>
                                <a href="#8" class="list-group-item list-group-item-action">6.1 Payment of tax</a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4 class="form-title" id="1">System generated summary for GSTR-3B</h4>
                            <form action="" class="form">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>GSTR-3B Table</th>
                                        <th>Source Form</th>
                                        <th>Form Status</th>
                                        <th>Summary Status</th>
                                    </tr>
                                    <tr>
                                        <td>3.1(a,b,c,e), 3.2 Liability</td>
                                        <td>GSTR-1</td>
                                        <td>
                                            <select name="" id="" class="form-control">
                                                <option value="">Filed</option>
                                                <option value="">Generated</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="" id="" class="form-control">
                                                <option value="">Yes</option>
                                                <option value="">No</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.1(d) Reverse Charge</td>
                                        <td>GSTR-2B</td>
                                        <td>
                                            <select name="" id="" class="form-control">
                                                <option value="">Filed</option>
                                                <option value="">Generated</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="" id="" class="form-control">
                                                <option value="">Yes</option>
                                                <option value="">No</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4A(1,3,4,5), 4B(2) Input Tax Credit</td>
                                        <td>GSTR-2B</td>
                                        <td>
                                            <select name="" id="" class="form-control">
                                                <option value="">Filed</option>
                                                <option value="">Generated</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="" id="" class="form-control">
                                                <option value="">Yes</option>
                                                <option value="">No</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="2">3.1 Details of Outward Supplies and inward supplies liable to reverse charge</h4>
                            <form action="" class="form">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Nature of Supplies</th>
                                        <th>Total Taxable value (₹)</th>
                                        <th>Integrated Tax (₹)</th>
                                        <th>Central Tax (₹)</th>
                                        <th>State/UT Tax (₹)</th>
                                        <th>CESS (₹)</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            (a) Outward taxable supplies (other than zero rated, nil rated and exempted)
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            (b) Outward taxable supplies (zero rated )
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            (c) Other outward supplies (Nil rated, exempted)
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            (d) Inward supplies (liable to reverse charge)
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            (e) Non-GST outward supplies
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                    </tr>
                                </table>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="3">3.2 Inter State Supplies </h4>
                            <form action="" class="form">
                                <h6>Supplies made to Unregistered Persons</h6>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Place of Supply (State/UT)</th>
                                        <th>Total Taxable value (₹)</th>
                                        <th>Amount of Integrated Tax (₹)</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                    </tr>
                                </table>
                                <h6>Supplies made to Composition Taxable Persons</h6>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Place of Supply (State/UT)</th>
                                        <th>Total Taxable value (₹)</th>
                                        <th>Amount of Integrated Tax (₹)</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                    </tr>
                                </table>
                                <h6>Supplies made to UIN holders</h6>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Place of Supply (State/UT)</th>
                                        <th>Total Taxable value (₹)</th>
                                        <th>Amount of Integrated Tax (₹)</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                    </tr>
                                </table>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="4">4. Eligible ITC </h4>
                            <form action="" class="form">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Details</th>
                                        <th>Integrated Tax (₹)</th>
                                        <th>Central Tax (₹)</th>
                                        <th>State/UT Tax (₹)</th>
                                        <th>CESS (₹)</th>
                                    </tr>
                                    <tr>
                                        <td><strong>ITC Available (whether in full or part)</strong></td>
                                        <td colspan="5"></td>
                                    </tr>
                                    <tr>
                                        <td>Import of goods</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Import of services</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Inward supplies liable to reverse charge (other than 1&2 above</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Inward supplies from ISD</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>All other ITC</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>ITC Reversed</strong></td>
                                        <td colspan="5"></td>
                                    </tr>
                                    <tr>
                                        <td>As per Rule 42&43 of CGST/SGST rules</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Others</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Net ITC Available (A) - (B) </strong></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>InellgIble ITC</strong></td>
                                        <td colspan="5"></td>
                                    </tr>
                                    <tr>
                                        <td>AS per section 17(5)</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Others</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                </table>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="5">5. Exempt, nil and Non GST inward supplies </h4>
                            <form action="" class="form">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Nature of Supplies</th>
                                        <th>Inter-State Supplies (₹)</th>
                                        <th>Intra-State Supplies (₹)</th>
                                    </tr>
                                    <tr>
                                        <td>From a supplier under composition scheme, Exempt and Nil rated supply</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Non GST supply</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                </table>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="6">5.1 Interest & late fee payable </h4>
                            <form action="" class="form">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Description</th>
                                        <th>Integrated Tax (₹)</th>
                                        <th>Central Tax (₹)</th>
                                        <th>State/UT Tax (₹)</th>
                                        <th>CESS (₹)</th>
                                    </tr>
                                    <tr>
                                        <td>Interest</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Late Fees</td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                </table>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="7">6.1 Payment of tax </h4>
                            <form action="" class="form">
                                <div class="table-responsive">
                                    <table class="table-bordered">
                                        <tr>
                                            <th rowspan="2">Description</th>
                                            <th rowspan="2">Other than reverse charge Tax payable (₹)</th>
                                            <th colspan="4">Paid through ITC</th>
                                            <th rowspan="2">Other than reverse charge Tax to be paid in Cash(₹)</th>
                                            <th rowspan="2">Reverse charge Tax payable (₹)</th>
                                            <th rowspan="2">Reverse charge Tax to be paid in Cash(₹)</th>
                                            <th rowspan="2">Interest Payable (₹)</th>
                                            <th rowspan="2">Interest to be paid in cash (₹)</th>
                                            <th rowspan="2">Late Fee Payable (₹)</th>
                                            <th rowspan="2">Late Fee to be paid in cash (₹)</th>
                                            <th rowspan="2">Utilizable Cash balance(₹)</th>
                                            <th rowspan="2">Additional Cash required(₹)</th>
                                        </tr>
                                        <tr>
                                            <th>Integrated Tax</th>
                                            <th>Central Tax</th>
                                            <th>State/UT Tax</th>
                                            <th>CESS</th>
                                        </tr>
                                        <tr>
                                            <td>Integrated Tax</td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Central Tax</td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>State/UT Tax</td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>CESS</td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>
                                    </table>
                                </div>
                                <button type="submit" class="btn btn-primary m-t-20">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="8">6.1 Payment of tax</h4>
                            <form action="" class="form">
                                <div class="table-responsive">
                                    <table class="table-bordered">
                                        <tr>
                                            <th rowspan="2">Description</th>
                                            <th colspan="5">Cash Ledger Balance</th>
                                            <th colspan="5">Credit Ledger Balance(including current month's credit)</th>
                                        </tr>
                                        <tr>
                                            <th>Integrated Tax</th>
                                            <th>Central Tax</th>
                                            <th>State/UT Tax</th>
                                            <th>CESS</th>
                                            <th>Total</th>
                                            <th>Integrated Tax</th>
                                            <th>Central Tax</th>
                                            <th>State/UT Tax</th>
                                            <th>CESS</th>
                                            <th>Total</th>
                                        </tr>
                                        <tr>
                                            <td>Tax</td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Interest</td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Late Fees</td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>

                                    </table>
                                </div>
                                <button type="submit" class="btn btn-primary m-t-20">Save Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
