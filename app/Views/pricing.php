<?php include('header.php'); ?>
  <style>
      .course-card {
    background: #fff;
    border-radius: 14px;
    border: 1px solid #e5e5e5;
    transition: 0.3s;
}

.course-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
}
  </style>
 <section class="py-5 bg-white">
    <div class="container">

        <!-- Title -->
        <div class="text-center mb-5">
            <h1 class="fw-700 ">
                Start Your Journey <span class="text-warning">Today</span>
            </h1>
             
        </div>

        <div class="row g-4">
            
            <?php if(!empty($packages)){ 
                 foreach($packages as $p){ ?>
                <div class="col-md-6">
                <div class="course-card p-4 h-100">
                    <h5 class="mb-3 fw-bold"><?php echo $p['title']; ?></h5>

                    <ul class="list-unstyled mb-4 small text-muted">
                        <?php echo $p['description']; ?>
                        <!--<li><i class="bi bi-check-circle-fill text-warning me-2"></i>Recorded Classes</li>-->
                        <!--<li><i class="bi bi-check-circle-fill text-warning me-2"></i>Instructor Led Live Classes</li>-->
                    </ul>

                    <div class="d-flex justify-content-between align-items-center">
                        
                        <h5 class="fw-600 mb-0">₹<?php echo $p['cost']; ?></h5> 
                         <a href="<?= base_url('checkout/' . $p['package_id']) ?>" class="btn btn btn-orange"> Get Started →</a>
                    </div>
                </div>
            </div>
             <?php } ?>
            
            <?php } ?>

            <!-- Card -->
            <!--<div class="col-md-6">-->
            <!--    <div class="course-card p-4 h-100">-->
            <!--        <h5 class="mb-3 fw-bold">GST Filing</h5>-->

            <!--        <ul class="list-unstyled mb-4 small text-muted">-->
            <!--            <li><i class="bi bi-check-circle-fill text-warning me-2"></i>Recorded Classes</li>-->
            <!--            <li><i class="bi bi-check-circle-fill text-warning me-2"></i>Instructor Led Live Classes</li>-->
            <!--        </ul>-->

            <!--        <div class="d-flex justify-content-between align-items-center">-->
                        
            <!--            <h5 class="fw-600 mb-0">₹999</h5> -->
            <!--             <a href="checkout/2" class="btn btn btn-orange"> Get Started →</a>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!-- Repeat Cards -->

            <!--<div class="col-md-6">-->
            <!--    <div class="course-card p-4 h-100">-->
            <!--        <h5 class="fw-bold mb-3">TDS Filing</h5>-->

            <!--        <ul class="list-unstyled mb-4 small text-muted">-->
            <!--            <li><i class="bi bi-check-circle-fill text-warning me-2"></i>Recorded Classes</li>-->
            <!--            <li><i class="bi bi-check-circle-fill text-warning me-2"></i>Instructor Led Live Classes</li>-->
            <!--        </ul>-->

            <!--        <div class="d-flex justify-content-between align-items-center">-->
            <!--            <h5 class="fw-600 mb-0">₹999</h5>-->
            <!--            <button class="btn btn-orange">Get Started →</button>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--<div class="col-md-6">-->
            <!--    <div class="course-card p-4 h-100">-->
            <!--        <h5 class="fw-bold mb-3">ESI</h5>-->

            <!--        <ul class="list-unstyled mb-4 small text-muted">-->
            <!--            <li><i class="bi bi-check-circle-fill text-warning me-2"></i>Recorded Classes</li>-->
            <!--            <li><i class="bi bi-check-circle-fill text-warning me-2"></i>Instructor Led Live Classes</li>-->
            <!--        </ul>-->

            <!--        <div class="d-flex justify-content-between align-items-center">-->
            <!--            <h5 class="fw-600 mb-0">₹599</h5>-->
            <!--            <button class="btn btn-orange">Get Started →</button>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--<div class="col-md-6">-->
            <!--    <div class="course-card p-4 h-100">-->
            <!--        <h5 class="fw-bold mb-3">EPF</h5>-->

            <!--        <ul class="list-unstyled mb-4 small text-muted">-->
            <!--            <li><i class="bi bi-check-circle-fill text-warning me-2"></i>Recorded Classes</li>-->
            <!--            <li><i class="bi bi-check-circle-fill text-warning me-2"></i>Instructor Led Live Classes</li>-->
            <!--        </ul>-->

            <!--        <div class="d-flex justify-content-between align-items-center">-->
            <!--            <h5 class="fw-600 mb-0">₹599</h5>-->
            <!--            <button class="btn btn-orange">Get Started →</button>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--<div class="col-md-6">-->
            <!--    <div class="course-card p-4 h-100">-->
            <!--        <h5 class="fw-bold mb-3">E-Way Bill Generation</h5>-->

            <!--        <ul class="list-unstyled mb-4 small text-muted">-->
            <!--            <li><i class="bi bi-check-circle-fill text-warning me-2"></i>Recorded Classes</li>-->
            <!--            <li><i class="bi bi-check-circle-fill text-warning me-2"></i>Instructor Led Live Classes</li>-->
            <!--        </ul>-->

            <!--        <div class="d-flex justify-content-between align-items-center">-->
            <!--            <h5 class="fw-600 mb-0">₹399</h5>-->
            <!--            <button class="btn btn-orange">Get Started →</button>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--<div class="col-md-6">-->
            <!--    <div class="course-card p-4 h-100">-->
            <!--        <h5 class="fw-bold mb-3">UAE VAT</h5>-->

            <!--        <ul class="list-unstyled mb-4 small text-muted">-->
            <!--            <li><i class="bi bi-check-circle-fill text-warning me-2"></i>Recorded Classes</li>-->
            <!--            <li><i class="bi bi-check-circle-fill text-warning me-2"></i>Instructor Led Live Classes</li>-->
            <!--        </ul>-->

            <!--        <div class="d-flex justify-content-between align-items-center">-->
            <!--            <h5 class="fw-600 mb-0">₹999</h5>-->
            <!--            <button class="btn btn-orange">Get Started →</button>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--<div class="col-md-6">-->
            <!--    <div class="course-card p-4 h-100">-->
            <!--        <h5 class="fw-bold mb-3">JE Practice Module</h5>-->

            <!--        <ul class="list-unstyled mb-4 small text-muted">-->
            <!--            <li><i class="bi bi-check-circle-fill text-warning me-2"></i>Recorded Classes</li>-->
            <!--            <li><i class="bi bi-check-circle-fill text-warning me-2"></i>Instructor Led Live Classes</li>-->
            <!--        </ul>-->

            <!--        <div class="d-flex justify-content-between align-items-center">-->
            <!--            <h5 class="fw-600 mb-0">₹999</h5>-->
            <!--            <button class="btn btn-orange">Get Started →</button>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

        </div>
    </div>
</section>
<section class="py-5 text-center" >
    <div class="container">

        <!-- Payment Powered -->
        <h4 class="mb-2 text-muted fw-bold">Payment powered by</h4>

        <p class="text-muted small mb-3 pt-4 fs-6">
            Accepts UPI, Debit Cards, Credit Cards, and Internet Banking
        </p>

        <!-- Security Info -->
        <div class="d-flex justify-content-center gap-4 flex-wrap mb-4">
            <span class="text-success small">
                <i class="bi bi-shield-check me-1"></i> Secure Payment
            </span>
            <span class="text-success small">
                <i class="bi bi-lock me-1"></i> 256 Bit Encryption
            </span>
        </div>

        <!-- Contact Info -->
        <p class="mb-1 text-muted pt-4">
            <b>Call or drop a WhatsApp message for any queries</b
        </p>

        <h5 class="fw-semibold" style="color:#ff7a00;">
            +91 8593939983
        </h5>

    </div>
</section>

<?php include('footer.php'); ?>