<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Sign up</h4>
						<form action="<?= base_url('auth/reg') ?>" method="post">
            <div class="form-group">
              <label for="email">Nama</label>
              <input type="text" name="nama" id="email" class="form-control" placeholder="Jhon kai" value="<?= set_value('nama') ?>">
              <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control" placeholder="email@example.com" value="<?= set_value('email') ?>">
              <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group mb-4">
              <label for="password">Password</label>
              <input type="password" name="password1" id="password" class="form-control" placeholder="enter your passsword"><?= form_error('password1', ' <small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group mb-4">
              <label for="password">Retype Password</label>
              <input type="password" name="password2" id="password" class="form-control" placeholder="retype your passsword">
            </div>
            <button name="submit" id="login" class="btn btn-primary btn-block mb-4">Sign up</button>
          </form>
						
						<p class="mb-2">Already have an account? <a href="<?= base_url("auth"); ?>" class="f-w-400">Signin</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->