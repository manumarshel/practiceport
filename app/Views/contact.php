<?php include('header.php'); ?>
 <style>
 
body{
    background-color: #f6f1ea;
}

</style>
<div class="container py-5"  >

    <!-- Title -->
    <div class="section-title">
        <h2 class="fw-bold">Get in Touch</h2>
        <p class="fw-normal">Have questions? We'd love to hear from you. Send us a message and we'll <br> respond as soon as possible.</p>
    </div>

    <div class="row g-4">

        <!-- LEFT FORM -->
        <div class="col-lg-8">
            <div class="contact-card">
                <h3 class="mb-4 fw-bold">Send us a Message</h3>
<?php if (session('success')): ?>
    <div class="alert alert-success">
        <?= session('success') ?>
    </div>
<?php endif; ?>

<?php if (session('error')): ?>
    <div class="alert alert-danger">
        <?= session('error') ?>
    </div>
<?php endif; ?>
              <form action="<?= base_url('/sendmail') ?>" method="post" id="contactForm">

    <div class="row mb-3">
        <div class="col-md-6">
            <label>Full Name *</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label>Email Address *</label>
            <input type="email" name="email" class="form-control" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label>Phone Number *</label>
            <input type="text" name="phone" class="form-control" required>
            <small id="phoneError" class="text-danger"></small>
        </div>
        <div class="col-md-6">
            <label>Qualification *</label>
            <input type="text" name="subject" class="form-control" required>
        </div>
    </div>

    <div class="mb-3" style="display:none;">
        <label>Message *</label>
        <textarea name="message" class="form-control" rows="4" required></textarea>
    </div>

    <button class="btn btn-orange w-100">
        <i class="bi bi-send"></i> Send Message
    </button>

</form>
            </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="col-lg-4">

            <!-- Quick Contact -->
            <div class="contact-side-card mb-4">
                <h6>Quick Contact</h6>
                <p class="mb-2"><i class="bi bi-telephone"></i> +91 7591987070</p>
                <p><i class="bi bi-envelope"></i> info@practicepot.com</p>
            </div>

            <!-- Office -->
            <div class="contact-side-card">
                <div class="d-flex align-items-start gap-3">
                    <div class="icon-box">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div>
                        <h6>Our Office</h6>
                        <small>
                           2nd Floor, RP Arcade,<br>
Ponnurunni, Vyttila, Kochi, <br>
Ernakulam, Kerala 682019	
                        </small>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<section class="mt-5 bg-white  py-5">
    <!-- Bottom Section -->
    <div class="text-center mt-5">
        <h1 class="mt-4">Dedicated Support</h1>
        <p class="text-muted fs-20 px-2">Get specialized assistance tailored to your needs</p>
    </div>
    
    <div class="container my-5">

    <div class="row g-4">

        <!-- Corporate Support -->
        <div class="col-md-6">
            <div class="support-box p-4">
                <div class="d-flex align-items-start gap-3">
                    <div class="support-icon bg-orange">
                        <i class="bi bi-building"></i>
                    </div>
                    <div>
                        <h5 class="fw-600 mb-1">Corporate Support</h5>
                        <p class="text-muted mb-0 small">For businesses and organizations</p>
                    </div>
                </div>

                <div class="mt-4">
                    <p class="mb-3 mt-2">
                        <i class="bi bi-telephone text-warning me-2"></i>
                        <strong>Phone Support</strong><br>
                        +91 8593939983
                    </p>

                    <p class="mb-0 mt-3">
                        <i class="bi bi-envelope text-warning me-2"></i>
                        <strong>Email Support</strong><br>
                        corporate@practicepot.com
                    </p>
                </div>
            </div>
        </div>

        <!-- Student Support -->
        <div class="col-md-6">
            <div class="support-box p-4">
                <div class="d-flex align-items-start gap-3">
                    <div class="support-icon bg-primary">
                        <i class="bi bi-mortarboard"></i>
                    </div>
                    <div>
                        <h5 class="fw-600 mb-1">Student Support</h5>
                        <p class="text-muted mb-0 small">For individual learners</p>
                    </div>
                </div>

                <div class="mt-4">
                    <p class="mb-3 mt-1">
                        <i class="bi bi-telephone text-warning me-2"></i>
                        <strong>Phone Support</strong><br>
                        +91 9037949375
                    </p>

                    <p class="mb-0 mt-2">
                        <i class="bi bi-envelope text-warning me-2"></i>
                        <strong>Email Support</strong><br>
                        support@practicepot.com
                    </p>
                </div>
            </div>
        </div>

    </div>

    <!-- CTA -->
    <!--<div class="mt-5">-->
    <!--    <div class="cta-support text-center p-5">-->
    <!--        <i class="bi bi-ticket-perforated fs-1"></i>-->

    <!--        <h4 class="fw-600 mt-3">Need Technical Support?</h4>-->

    <!--        <p class="mt-2">-->
    <!--            Submit a support ticket and our technical team will help you resolve any issues-->
    <!--            with the platform, simulations, or account access.-->
    <!--        </p>-->

    <!--        <button class="btn btn-light fw-500 px-4 mt-2">-->
    <!--            <i class="bi bi-send me-2"></i> Submit Support Ticket-->
    <!--        </button>-->
    <!--    </div>-->
    <!--</div>-->

</div>
</section>
<script>
  
document.getElementById('contactForm').addEventListener('submit', function(e) {

    let required = ['name', 'email', 'subject', 'message'];
    let valid = true;

    required.forEach(function(field) {
        let input = document.querySelector(`[name="${field}"]`);
        if (!input.value.trim()) {
            input.style.border = '1px solid red';
            valid = false;
        } else {
            input.style.border = '';
        }
    });
     
    if (!valid) {
        e.preventDefault();
        alert("Please fill all required fields");
    }
}); 

document.getElementById('phone').addEventListener('input', function() {
    let phone = this.value.trim();
    let error = document.getElementById('phoneError');

    let regex = /^(?:\+91|91)?[6-9]\d{9}$/;

    if (phone === "" || regex.test(phone)) {
        error.innerText = "";
    } else {
        error.innerText = "Invalid mobile number";
    }
});
</script>
<?php include('footer.php'); ?>