<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PracticePot</title>
    <link href="<?php echo base_url(); ?>/public/assets/frontend/images/pp-fav.png" rel="shortcut icon"
          type="image/x-icon">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/frontend/css/global/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/frontend/css/global/plugins/icon-font.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/frontend/css/style.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/frontend/css/okt1.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/frontend/css/ckt1.css">


    <!-- /build -->
    <style>
        .show-hide-password {
            float: right;
            cursor: pointer;
            margin-right: 20px;
            margin-top: -35px;
        }

        .client-logos img {
            width: 175px;
            margin: 10px;
        }

        img.ico {
            width: 70px;
        }
    </style>
</head>
<body>

<header id="home">
    <?php
    $description = "Product Description";
    $txnid = date("YmdHis");
    $key_id = "rzp_test_6eXNb4JTupd6NC";
    $currency_code = $currency_code;; // 100 = 1 indian rupees
    if ($productPrice) {
        $total = (100 * $productPrice);
        $amount = $productPrice;
    } else {
        $amount = 0;
        $total = 0;
    }

    $merchant_order_id = "practicespot-" . date("YmdHis");
    $card_holder_name = '';
    $email = '';
    $phone = '';
    $name = "Practicespot";
    ?>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>/">
                <img src="<?php echo base_url(); ?>/public/assets/frontend/images/pp-logo.png" alt="" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav"
                    aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--            <div class="collapse navbar-collapse" id="site-nav">-->
            <!--                <ul class="navbar-nav text-sm-left ml-auto">-->
            <!--                    <li class="nav-item">-->
            <!--                        <a class="nav-link" href="#features">Features</a>-->
            <!--                    </li>-->
            <!--                    <li class="nav-item">-->
            <!--                        <a class="nav-link" href="#pricing">Pricing</a>-->
            <!--                    </li>-->
            <!--                    <li class="nav-item">-->
            <!--                        <a class="nav-link" href="#">Help</a> -->
            <!--                    </li>-->
            <!---->
            <!--                    <li class="nav-item text-center">-->
            <!--                        <a href="<?= base_url('user') ?>" class="btn align-middle btn-outline-primary my-2 my-lg-0">Login</a>-->
            <!--                    </li>-->
            <!--                    <li class="nav-item text-center">-->
            <!--                        <a href="#signup" class="btn align-middle btn-primary my-2 my-lg-0">Sign Up</a>-->
            <!--                    </li>-->
            <!--                </ul>-->
            <!---->
            <!--            </div>-->
        </div>
    </nav>
    <!-- // end navbar -->

</header>
<?php //echo session()->get('isLoggedIn'); ?>
<?php //echo session()->get('user_email'); ?>
<div class="container">
    <div class="section" id="signup">
        <div class="container" id="pricing">
            <div class="section-title text-center">
                <h3>Confirm Checkout</h3>
            </div>
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <form name="razorpay-form" id="razorpay-form" action="<?php echo $callback_url; ?>"
                                  method="POST">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control"
                                           value="<?php echo $first_name; ?>" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="last_name" class="form-control"
                                           value="<?php echo $last_name; ?>" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control"
                                           value="<?php echo $u_email; ?>" placeholder="Email Address">
                                </div>

                              
                                    <div class="form-group">
                                        <input type="text" name="mobile" class="form-control"
                                               value="<?php echo $mobile; ?>" placeholder="Mobile Number">
                                    </div>
                                      <?php if (!$isLoggedIn): ?>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control"
                                               placeholder="Password">
                                        <i class="show-hide-password toggle-password fa fa-fw fa-eye-slash"></i>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="cpassword" class="form-control"
                                               placeholder="Confirm Password">
                                        <i class="show-hide-password toggle-cpassword fa fa-fw fa-eye-slash"></i>
                                    </div>
                                <?php endif; ?>
                                <!-- <div class="form-group">
                                    <button type="submit" class="btn btn-xl btn-block btn-primary">GET STARTED NOW</button>
                                </div> -->

                                <div id="show-errors"></div>
                        </div>
                    </div>
                    <div class="row">
                        <!--                        <form name="coupon-form" id="coupon-form" action="" method="POST">-->
                        <div class="col col-md-8">
                            <div class="form-group">
                                <input type="text" name="coupon" id="coupon" class="form-control"
                                       placeholder="Coupon Code">
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <div class="form-group">
                                <button type="submit" id="check_coupon" class="btn btn-xl btn-block btn-primary">
                                    Apply
                                </button>
                            </div>
                        </div>
                        <!--                        </form>-->
                    </div>
                    <div id="show-cpn-errors"></div>
                </div>
                <div class="col col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <dl class="dlist-align">
                                <dt>Package Selected</dt>
                                <dd class="text-end"> <?php if (isset($productTitle)) {
                                        echo $productTitle;
                                    } ?></dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Price</dt>
                                <dd class="text-end">
                                    ₹<?php if ($productPrice && $productPrice != '') echo $productPrice; else '0'; ?></dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>TAX:</dt>
                                <dd class="text-end"> Inc. of Tax</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Discount:</dt>
                                <dd class="text-end discount-amount">0</dd>
                            </dl>
                            <hr>
                            <dl class="dlist-align">
                                <dt>Total:</dt>
                                <dd class="text-end text-dark h5 dsiplay-amount-total">
                                    ₹<?php if ($productPrice && $productPrice != '') echo $productPrice; else '0'; ?> </dd>
                            </dl>
                            <div class="d-grid gap-2 my-3">
                                <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id"/>
                                <input type="hidden" name="merchant_order_id" id="merchant_order_id"
                                       value="<?php echo $merchant_order_id; ?>"/>
                                <input type="hidden" name="merchant_trans_id" id="merchant_trans_id"
                                       value="<?php echo $txnid; ?>"/>
                                <input type="hidden" name="merchant_product_info_id" id="merchant_product_info_id"
                                       value="<?php echo $description; ?>"/>
                                <input type="hidden" name="merchant_surl_id" id="merchant_surl_id"
                                       value="<?php echo $surl; ?>"/>
                                <input type="hidden" name="merchant_furl_id" id="merchant_furl_id"
                                       value="<?php echo $furl; ?>"/>
                                <input type="hidden" name="card_holder_name_id" id="card_holder_name_id"
                                       value="<?php echo $card_holder_name; ?>"/>
                                <input type="hidden" name="merchant_total" id="merchant_total"
                                       value="<?php echo $total; ?>"/>
                                <input type="hidden" name="merchant_amount" id="merchant_amount"
                                       value="<?php echo $productPrice; ?>"/>
                                <input type="hidden" name="package" id="merchant_productId"
                                       value="<?php echo $productId; ?>"/>
                                <!--                                <input type="hidden" name="cpn" id="cpn"-->
                                <!--                                       value="0"/>-->
                                <!--                                <a href="#" class="btn btn-primary w-100"> Make Purchase </a>-->
                                <?php if ($productId == 9): ?>
                                    <button id="pay-btn" type="submit" class="btn btn-primary w-100">Make Purchase
                                    </button>
                                <?php else: ?>
                             <?php if ($isLoggedIn){ ?>
   <button id="pay-btn" type="submit" onclick="razorpaySubmitLogged(this);"
                                            class="btn btn-primary w-100">Make Purchase
                                    </button>
<?php }else{ ?>
                                    <button id="pay-btn" type="submit" onclick="razorpaySubmit(this);"
                                            class="btn btn-primary w-100">Make Purchase
                                    </button>
                                    <?php } ?>
                                <?php endif; ?>
                                <input type="hidden" id="is_logged_in"
       value="<?= session()->has('user_id') ? '1' : '0'; ?>">
                                 
                                </form>
                            </div>
                        </div> <!-- card-body.// -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="section bg-light mt-4" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <p class="mt-3 ml-1 text-muted">PracticePot </p>
                <p class="ml-1"><a
                            href="<?= base_url('user') ?>"
                            target="_blank">Login now →</a></p>
                <!-- // end .lead -->
            </div>
            <!-- // end .col-sm-3 -->
            <div class="col-sm-2">
                <ul class="list-unstyled footer-links ml-1">
                    <li><a href="#features">Features</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <!-- // end .col-sm-3 -->
            <div class="col-sm-2">
                <ul class="list-unstyled footer-links ml-1">
                    <li><a href="#">Terms</a></li>
                    <li><a href="#about">Privacy</a></li>
                </ul>
            </div>
            <!-- // end .col-sm-3 -->
            <div class="col-sm-2">
                <ul class="list-unstyled footer-links ml-1">
                    <li><a href="https://www.facebook.com/Practicepot-107508441849671">Facebook</a></li>
                    <li><a href="https://www.linkedin.com/company/practicepot/">Linkedin</a></li>
                </ul>
            </div>
            <!-- // end .col-sm-3 -->
            <div class="col-sm-2">
                <a href="#home" class="btn btn-sm btn-outline-primary ml-1">Go to Top</a>
            </div>
            <!-- // end .col-sm-3 -->
        </div>
        <!-- // end .row -->
        <div class=" text-center mt-4"><small class="text-muted">Copyright ©
                <script type="text/javascript">
                    document.write(new Date().getFullYear());
                </script>
                All Rights Reserved.
            </small></div>
    </div>
    <!-- // end .container -->
</div>

<script src="<?php echo base_url(); ?>/public/assets/frontend/js/global/jquery-3.2.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    const baseUrl = '<?php echo base_url(); ?>' + '/admin';
    const productId = '<?php echo $productId; ?>';
</script>
<script>
    const validateEmail = (email) => {
        return email.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
    };
    $(".toggle-password").click(function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        input = $(this).parent().find("input");
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $(".toggle-cpassword").click(function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        input = $(this).parent().find("input");
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
    var options = {
        key: "<?php echo $key_id; ?>",
        amount: "<?php echo $total; ?>",
        name: "<?php echo $name; ?>",
        description: "Order # <?php echo $merchant_order_id; ?>",
        netbanking: true,
        currency: "<?php echo $currency_code; ?>", // INR
        prefill: {
            name: "<?php echo $card_holder_name; ?>",
            email: "<?php echo $email; ?>",
            contact: "<?php echo $phone; ?>"
        },
        notes: {
            soolegal_order_id: "<?php echo $merchant_order_id; ?>",
        },
        handler: function (transaction) {
            document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
            document.getElementById('razorpay-form').submit();
        },
        "modal": {
            "ondismiss": function () {
                location.reload()
            }
        }
    };
    var razorpay_pay_btn, instance;

    function razorpaySubmit(el) {
        event.preventDefault();
        let empty = false;
        // $('input').each(function () {
        //     if ($(this).val() === "") {
        //         console.log($(this))
        //         empty = true;
        //         return false;
        //     }
        // });
        let first_name = $('input[name="first_name"]').val();
        let last_name = $('input[name="last_name"]').val();
        let email = $('input[type="email"]').val();
        let mobile = $('input[name="mobile"]').val();
        let password = $('input[name="password"]').val();
        let cpassword = $('input[name="cpassword"]').val();

        if (first_name === "" ||
            last_name === "" ||
            email === "" ||
            mobile === "" ||
            password === "" ||
            cpassword === ""

        ) {
            $('#show-errors').html('All fields are mandatory').show();
        } else {

            if (validateEmail(email)) {
                if (password === cpassword) {
                    if (password.length >= 8) {
                        $('#show-errors').html('Success').show();
                        if (typeof Razorpay == 'undefined') {
                            // console.log("nnnn");
                            setTimeout(razorpaySubmit, 200);
                            if (!razorpay_pay_btn && el) {
                                console.log("nnnn if");
                                razorpay_pay_btn = el;
                                el.disabled = true;
                                el.value = 'Please wait...';
                            }
                        } else {
                            // console.log("mmmmm");
                            if (!instance) {
                                // console.log("mmmmm if");
                                instance = new Razorpay(options);
                                if (razorpay_pay_btn) {
                                    // console.log("mmmmm if 2");
                                    razorpay_pay_btn.disabled = false;
                                    razorpay_pay_btn.value = "Pay Now";
                                }
                            }
                            instance.open();
                        }
                    } else {
                        $('#show-errors').html('Password should be at least 8 characters').show();
                    }
                } else {
                    $('#show-errors').html('Password does not match').show();
                }
            } else {
                $('#show-errors').html('Invalid email').show();
                console.log("Invalid email")
            }

        }

        // return false;
    }
    
    
   function razorpaySubmitLogged(el) {

    event.preventDefault();

    if (typeof Razorpay == 'undefined') {

        setTimeout(function () {
            razorpaySubmitLogged(el);
        }, 200);

        if (!razorpay_pay_btn && el) {
            razorpay_pay_btn = el;
            el.disabled = true;
            el.innerHTML = 'Please wait...';
        }

    } else {

        if (!instance) {

            instance = new Razorpay(options);

            if (razorpay_pay_btn) {
                razorpay_pay_btn.disabled = false;
                razorpay_pay_btn.innerHTML = "Make Purchase";
            }
        }

        instance.open();
    }
}

    $('#check_coupon').on('click', function (e) {
        e.preventDefault();
        let coupon = $('#coupon').val();
        let action = baseUrl + "/coupons/check_coupon";
        let totalElement = $('#merchant_total');
        let amountElement = $('#merchant_amount');
        let displyTotal = $('.dsiplay-amount-total');
        let displayDiscount = $('.discount-amount');
        $('#show-cpn-errors').text('');
        if (coupon !== '') {
            $.ajax({
                method: "POST",
                url: action,
                dataType: 'json',
                data: {'coupon': coupon, 'productId': productId},
                cache: false
            }).done(function (msg) {
                console.log(msg);
                let offer = msg.offer;
                totalElement.val(parseFloat(offer) * 100);
                amountElement.val(offer);
                displyTotal.text(offer);
                displayDiscount.text(msg.discount);
                options['amount'] = parseFloat(offer) * 100;
                // alert("deleted successfully");
                // window.location.reload();
            }).fail(function (response) {
                $('#show-cpn-errors').text(response.responseJSON.msg);
            });
        } else {
            // alert('Please enter a coupon code');
            $('#show-cpn-errors').text('Please enter a coupon code');
        }
    })
</script>
</body>
</html>
