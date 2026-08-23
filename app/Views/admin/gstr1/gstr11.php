<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="page-header">
                    <h2 class="header-title">Add New Company</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="#" class="breadcrumb-item"><i class="anticon anticon-project m-r-5"></i>Company Details</a>
                            <a class="breadcrumb-item active" href="#">GSTR1 Data</a>
                            <a class="breadcrumb-item" href="#">GSTR3B Data</a>
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
                                <a href="#1" class="list-group-item list-group-item-action active">B2B</a>
                                <a href="#2" class="list-group-item list-group-item-action">B2C Large</a>
                                <a href="#3" class="list-group-item list-group-item-action">9B Credit/Debit Note </a>
                                <a href="#4" class="list-group-item list-group-item-action">9B - Credit / Debit Notes (Unregistered)</a>
                                <a href="#5" class="list-group-item list-group-item-action">6A - Exports Invoices</a>
                                <a href="#6" class="list-group-item list-group-item-action">9 Amended B2B Invoices</a>
                                <a href="#7" class="list-group-item list-group-item-action">9A - Amended B2C ( Large ) Invoices</a>
                                <a href="#8" class="list-group-item list-group-item-action">9A - Amended Exports Invoices</a>
                                <a href="#9" class="list-group-item list-group-item-action">9C - Amended Credit/Debit Notes (Registered)</a>
                                <a href="#10" class="list-group-item list-group-item-action">9C - Amended Credit/Debit Notes (Unregistered)</a>
                                <a href="#11" class="list-group-item list-group-item-action">7 - B2C (Others)</a>
                                <a href="#12" class="list-group-item list-group-item-action">8A, 8B, 8C, 8D - Nil Rated Supplies</a>
                                <a href="#13" class="list-group-item list-group-item-action">11A(1), 11A(2) - Tax Liability (Advances Received)</a>
                                <a href="#14" class="list-group-item list-group-item-action">Adjustment of Advances - Summary</a>
                                <a href="#15" class="list-group-item list-group-item-action">HSN-wise summary of outward supplies</a>
                                <a href="#16" class="list-group-item list-group-item-action">Documents issued during the tax period</a>
                                <a href="#17" class="list-group-item list-group-item-action">Amended Tax Liability (Advance Received) - Summary</a>
                                <a href="#18" class="list-group-item list-group-item-action">Amendment of Adjustment of Advances - Summary</a>
                                <a href="#19" class="list-group-item list-group-item-action">Amended B2C(Others) Details - Summary</a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4 class="form-title" id="1">B2B</h4>
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Is the supply eligible to be taxed at a differential percentage (%) of the existing rate of tax, as notified by the Government? </label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Receiver GSTIN/UIN</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Receiver Name</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Invoice no.</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Invoice date</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">POS </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Total invoice value (₹)</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Supply Type</label>
                                        <input type="text" class="form-control" placeholder="">
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
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0.1%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0.25%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1.5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7.5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                </table>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="2">B2C Large</h4>
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Is the supply eligible to be taxed at a differential percentage (%) of the existing rate of tax, as notified by the Government? </label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">POS </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Invoice no.</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Invoice date</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Supply Type</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Total invoice value (₹)</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col"></div>
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
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0.1%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0.25%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1.5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7.5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                </table>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="3">9B Credit/Debit Note </h4>
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Is the supply eligible to be taxed at a differential percentage (%) of the existing rate of tax, as notified by the Government? </label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Receiver GSTIN/UIN </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Receiver Name</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Debit/Credit Note No.</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Debit/Credit Note Date</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Note Type</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Note Value (₹)</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">POS</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Supply Type</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col"></div>
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
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0.1%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0.25%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1.5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7.5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                </table>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="4">9B - Credit / Debit Notes (Unregistered) </h4>
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Is the supply eligible to be taxed at a differential percentage (%) of the existing rate of tax, as notified by the Government? </label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Debit/Credit Note No. </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Debit/Credit Note Date</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Note Type</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Note Value (₹)</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">POS</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Supply Type</label>
                                        <input type="text" class="form-control" placeholder="">
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
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0.1%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0.25%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1.5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7.5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                </table>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="5">6A - Exports Invoices </h4>
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Invoice no. </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Invoice date</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Port Code</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Shipping Bill No./Bill of Export No.</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Shipping Bill Date/Bill of Export Date</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Total invoice value (₹)</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Supply Type</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">GST Payment</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">With payment of Tax</option>
                                            <option value="">Without payment of Tax</option>
                                        </select>
                                    </div>
                                    <div class="col"></div>
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
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0.1%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0.25%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1.5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7.5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                </table>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="6">9 Amended B2B Invoices </h4>
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Financial Year </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Invoice no.</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="7">9A - Amended B2C ( Large ) Invoices </h4>
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Financial Year </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Invoice no.</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="8">9A - Amended Exports Invoices</h4>
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Financial Year </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Invoice no.</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="9">9C - Amended Credit/Debit Notes (Registered)</h4>
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Financial Year </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Invoice no.</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="10">9C - Amended Credit/Debit Notes (Unregistered)</h4>
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Financial Year </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Invoice no.</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="11">7 - B2C (Others)</h4>
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">POS </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Taxable value (₹)</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Supply Type</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Rate </label>
                                        <select name="" id="" class="form-control">
                                            <option value="">0%</option>
                                            <option value="">5%</option>
                                            <option value="">12%</option>
                                            <option value="">18%</option>
                                            <option value="">28%</option>
                                        </select>
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Integrated Tax (₹)</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">CESS (₹)</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Central Tax (₹) </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">State/UT Tax (₹)</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col"></div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="12">8A, 8B, 8C, 8D - Nil Rated Supplies</h4>
                            <form action="" class="form">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Description</th>
                                        <th>Nil Rated Supplies (₹)</th>
                                        <th>Exempted (Other than Nil rated/non-GST supply) (₹)</th>
                                        <th>Non-GST Supplies (₹)</th>
                                    </tr>
                                    <tr>
                                        <td>Inter-state supplies to registered person</td>
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
                                        <td>Inter-state supplies to unregistered person</td>
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
                                        <td>Intra-state supplies to registered person</td>
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
                                        <td>Intra-state supplies to unregistered person</td>
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
                            <h4 class="form-title m-t-60" id="13">11A(1), 11A(2) - Tax Liability (Advances Received)</h4>
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Is the supply eligible to be taxed at a differential percentage (%) of the existing rate of tax, as notified by the Government?</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">POS </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Supply Type</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <h6>Item Details</h6>
                                <table class="table table-bordered">
                                    <tr>
                                        <th rowspan="2">Rate (%)</th>
                                        <th rowspan="2">Gross Advance Received (excluding tax) (₹)</th>
                                        <th colspan="2">Amount of Tax</th>
                                    </tr>
                                    <tr>
                                        <th>Integrated Tax (₹)</th>
                                        <th>CESS (₹)</th>
                                    </tr>
                                    <tr>
                                        <td>0%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0.1%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0.25%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1.5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7.5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                </table>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="14">Adjustment of Advances</h4>
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Is the supply eligible to be taxed at a differential percentage (%) of the existing rate of tax, as notified by the Government?</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">POS </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Supply Type</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <h6>Item Details</h6>
                                <table class="table table-bordered">
                                    <tr>
                                        <th rowspan="2">Rate (%)</th>
                                        <th rowspan="2">Gross Advance Adjusted (excluding tax) (₹)</th>
                                        <th colspan="2">Amount of Tax</th>
                                    </tr>
                                    <tr>
                                        <th>Integrated Tax (₹)</th>
                                        <th>CESS (₹)</th>
                                    </tr>
                                    <tr>
                                        <td>0%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0.1%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0.25%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1.5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7.5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                </table>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="15">HSN-wise summary of outward supplies</h4>
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">HSN </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Description</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">UQC</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Total Quantity </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Total taxable value (₹)</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Rate (%)</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Integrated tax (₹) </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Central tax (₹)</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">State/UT tax (₹)</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Cess (₹)</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="16">Documents issued during the tax period</h4>
                            <form action="" class="form">
                                <table class="table table-bordered">
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th colspan="2">Sr. No</th>
                                        <th rowspan="2">Total number</th>
                                        <th rowspan="2">Cancelled</th>
                                        <th rowspan="2">Net issued</th>
                                    </tr>
                                    <tr>
                                        <th>From</th>
                                        <th>To</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>

                                </table>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="17">Amended Tax Liability (Advance Received) - Summary</h4>
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Is the supply eligible to be taxed at a differential percentage (%) of the existing rate of tax, as notified by the Government?</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Financial Year </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Return Filing Period</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">POS</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="18">Amendment of Adjustment of Advances - Summary</h4>
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Is the supply eligible to be taxed at a differential percentage (%) of the existing rate of tax, as notified by the Government?</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Financial Year </label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Return Filing Period</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">POS</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                            <h4 class="form-title m-t-60" id="19">Amended B2C(Others) Details - Summary</h4>
                            <form action="" class="form">
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Is the supply eligible to be taxed at a differential percentage (%) of the existing rate of tax, as notified by the Government? </label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <label for="">Year</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Month</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col form-group">
                                        <label for="">Original POS</label>
                                        <input type="text" class="form-control" placeholder="">
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
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0.1%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0.25%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1.5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7.5%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28%</td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="">
                                        </td>
                                    </tr>
                                </table>
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>