
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022 - US<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="https://www.instagram.com/toothsome.pku/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://wa.me/6281267139522" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>


  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/aos/aos.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"></script>
  <script type="text/javascript" >
    $('.custom-file-input').on('change', function () {
		let fileName = $(this).val().split('\\').pop();
		$(this).next('custom-file-label').addClass("selected").html(fileName);
	})
	$(document).ready(function () {
		$("#jumlah").on('keydown keyup change blur', function () {
			var harga = $("#harga").val();
			var jumlah = $("#jumlah").val();

			var total = parseInt(harga) * parseInt(jumlah);
			$("#total").val(total);
			if (parseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
				alert('stok tidak tersedia! stok tersedia : ' + parseInt($('input[name="stok"]').val()))
				reset()
			}
		});

		function reset() {
			$('input[name="jumlah"]').val('')
			$('input[name="total"]').val('')
		}
	})
  </script>
</body>

</html>