<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PracticePot</title>
    <link href="<?php echo base_url(); ?>/public/assets/frontend/images/pp-fav.png" rel="shortcut icon" type="image/x-icon">

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
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
	        <div class="container">
	            <a class="navbar-brand" href="<?= base_url() ?>/">
	                <img src="<?php echo base_url(); ?>/public/assets/frontend/images/pp-logo.png" alt="" class="logo">
	            </a>
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav"
	                    aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>

<!--	            <div class="collapse navbar-collapse" id="site-nav">-->
<!--	                <ul class="navbar-nav text-sm-left ml-auto">-->
<!--	                    <li class="nav-item">-->
<!--	                        <a class="nav-link" href="#features">Features</a>-->
<!--	                    </li>-->
<!--	                    <li class="nav-item">-->
<!--	                        <a class="nav-link" href="#pricing">Pricing</a>-->
<!--	                    </li>-->
<!--	                    <li class="nav-item">-->
	                        <!-- <a class="nav-link" href="#">Help</a> -->
<!--	                    </li>-->
<!---->
<!--	                    <li class="nav-item text-center">-->
<!--	                        <a href="<?= base_url('user') ?>" class="btn align-middle btn-outline-primary my-2 my-lg-0">Login</a>-->
<!--	                    </li>-->
<!--	                    <li class="nav-item text-center">-->
<!--	                        <a href="#signup" class="btn align-middle btn-primary my-2 my-lg-0">Sign Up</a>-->
<!--	                    </li>-->
<!--	                </ul>-->
<!---->
<!--	            </div>-->
	        </div>
	    </nav>
	</header>

	<div class="section py-lg">
		<div class="container">
			<div class="row">
				<div class="col-md-4 offset-md-4">
					<div class="card">
						<div class="card-body text-center" style="padding:40px">
							<i class="fa fa-times-circle fa-2x text-danger"></i>
							<h4 class="text-danger mt-2">Payment Failed!</h4>
							<p>Transaction Number : <strong><?php echo $transaction_id; ?>></strong></p>
							<p>Payment failed. Please try again!</p>
                            <?php if ( ! $reg_status ): ?>
                                <p>Account couldn't create. Please reach out to admin - <a href="mailto:tech@practicepot.com">tech@practicepot.com</a></p>
                            <?php endif; ?>
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

</body>

</html>
