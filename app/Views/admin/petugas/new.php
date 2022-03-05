<?= $this->extend('templates/base_dashboard'); ?>
<?= $this->section('content'); ?>

<div class="title-wrapper pt-30">
	<div class="row align-items-center">
		<div class="col-md-6">
			<div class="titlemb-30">
				<h2>Tambah Petugas</h2>
			</div>
		</div>
		<!-- end col -->
		<div class="col-md-6">
			<div class="breadcrumb-wrapper mb-30">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item" aria-current="page">
							<a href="<?= base_url('/petugas'); ?>">Data Petugas</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">
							Tambah Petugas
						</li>
					</ol>
				</nav>
			</div>
		</div>
		<!-- end col -->
	</div>
	<!-- end row -->
</div>

<div class="form-elements-wrapper">
	<div class="row">
		<div class="card-style">
			<form action="<?= base_url('/petugas'); ?>" method="post">
				<div class="input-style-1">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" value="<?= old('email'); ?>" placeholder="Email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" />
					<div class="invalid-feedback">
						<?= session('errors.email') ?>
					</div>

					<label for="nama" class="mt-3">Nama Petugas</label>
					<input type="text" name="nama" id="nama" value="<?= old('nama'); ?>" placeholder="Nama Petugas" class="form-control <?php if(session('errors.nama')) : ?>is-invalid<?php endif ?>" />
					<div class="invalid-feedback">
						<?= session('errors.nama') ?>
					</div>

					<label for="telp" class="mt-3">No. Telp</label>
					<input type="number" name="telp" id="telp" value="<?= old('telp'); ?>" placeholder="No. Telp" class="form-control <?php if(session('errors.telp')) : ?>is-invalid<?php endif ?>" />
					<div class="invalid-feedback">
						<?= session('errors.telp') ?>
					</div>

					<label for="username" class="mt-3">Username</label>
					<input type="text" name="username" id="username" value="<?= old('username'); ?>" placeholder="Username" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" />
					<div class="invalid-feedback">
						<?= session('errors.username') ?>
					</div>

					<label for="password" class="mt-3">Password</label>
					<input type="password" name="password" id="password" value="<?= old('password'); ?>" placeholder="Password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" />
					<div class="invalid-feedback">
						<?= session('errors.password') ?>
					</div>

					<button type="submit" class="main-btn primary-btn btn-hover float-end mt-3">Tambah</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>