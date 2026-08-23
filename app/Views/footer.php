    <!-- ================= FOOTER ================= -->
    <footer class="site-footer">
  <div class="container">
    <div class="row">

      <!-- Brand column -->
      <div class="col-12 col-md-4 col-lg-4 footer-brand">
        <div class="logo-wrap">
          <img src="<?= base_url('public/assets/frontend/new/images/fin-white.png') ?>" alt="PracticePot Logo"/>
        </div>
        <p>Practicepot offers risk-free, expert-led simulations for Indian commerce students to master real-world accounting and tax filing</p>
        <div class="social-icons">
          <!-- X (Twitter) -->
          <a href="#" aria-label="X">
            <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.748l7.73-8.835L1.254 2.25H8.08l4.261 5.632 5.903-5.632zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
          </a>
          <!-- LinkedIn -->
          <a href="#" aria-label="LinkedIn">
            <svg viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          </a>
          <!-- Facebook -->
          <a href="#" aria-label="Facebook">
            <svg viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
        </div>
      </div>

      <!-- Spacer col -->
      <div class="col-12 col-md-8 col-lg-8">
        <div class="row">

          <!-- Product -->
          <div class="col-6 col-sm-3 footer-nav-col">
            <h6>Product</h6>
            <ul>
              <li><a href="#">Features</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>

          <!-- Company -->
          <div class="col-6 col-sm-3 footer-nav-col">
            <h6>Company</h6>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="<?= base_url('contact') ?>">Contct</a></li>
            </ul>
          </div>

          <!-- Resources -->
          <div class="col-6 col-sm-3 footer-nav-col mt-4 mt-sm-0">
            <h6>Resources</h6>
            <ul>
              <li><a href="#">Help Center</a></li>
              <li><a href="#">Community</a></li>
              <li><a href="#">Guides</a></li>
              <li><a href="#">Webinars</a></li>
            </ul>
          </div>

          <!-- Legal -->
          <div class="col-6 col-sm-3 footer-nav-col mt-4 mt-sm-0">
            <h6>Legal</h6>
            <ul>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Security</a></li>
              <li><a href="#">Cookies</a></li>
            </ul>
          </div>

        </div>
      </div>

    </div><!-- /row -->

    <!-- Divider -->
    <hr class="footer-divider"/>

    <!-- Bottom bar -->
    <div class="footer-bottom">
      <span class="copy">© 2025 Practicepot. All rights reserved.</span>
      <div class="bottom-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <a href="#">Cookie Policy</a>
      </div>
    </div>

  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleFAQ(questionEl) {
            const item = questionEl.closest('.faq-item');
            const isOpen = item.classList.contains('open');

            // Close all
            document.querySelectorAll('.faq-item').forEach(el => el.classList.remove('open'));

            // Open clicked if it was closed
            if (!isOpen) {
                item.classList.add('open');
            }
        }
    </script>
</body>

</html>