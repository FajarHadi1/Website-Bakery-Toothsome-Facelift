<!-- Sing in  Form -->
<section class="sign-in">
	<div class="container">
		<?= $this->session->flashdata('message');?>
		<div class="signin-content">
			<div class="signin-image">
				<figure><img src="<?= base_url('uploads/') ?>iconWelcome.png" alt="sing up image"></figure>
				<a href="<?= base_url('auth/register') ?>" class="signup-image-link">Create an account</a>
			</div>
			<div class="signin-form">
				<h2 class="form-title">Login</h2>
				<form method="POST" class="register-form" id="login-form" action="<?= base_url('auth/cek_login'); ?>">
					<div class="form-group">
						<label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
						<input type="text" name="email" id="email" placeholder="Your Email" />
					</div>
					<div class="form-group">
						<label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
						<input type="password" name="password" id="password" placeholder="Password" />
					</div>
					<div class="form-group">
						<input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
						<label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
					</div>
					<div class="form-group form-button">
						<input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
					</div>
				</form>
				<div class="social-login">
					<span class="social-label">Or login with</span>
					<ul class="socials">
						<li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
						<li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
						<li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
