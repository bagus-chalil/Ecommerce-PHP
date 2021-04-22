<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<h3 class="img-fluid mb-4 text-primary">Selamat Datang</h3>
						<h4 class="mb-3 f-w-400">Signin</h4>
          <?= $this->session->flashdata('pesan'); ?>
          <form action="<?= base_url('auth') ?>" method="post">
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Email address</label>
							<input type="text" name="email" id="email" class="form-control" placeholder="email@example.com">
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label>
							<input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
						</div>
						<button name="submit" id="login" class="btn btn-block btn-primary mb-4">Signin</button>
          </form>
						<p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
						<p class="mb-0 text-muted">Don’t have an account? <a href="<?= base_url("auth/reg"); ?>" class="f-w-400">Signup</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->