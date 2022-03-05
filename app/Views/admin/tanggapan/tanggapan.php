<?= $this->extend('templates/base_dashboard'); ?>
<?= $this->section('content'); ?>

<div class="title-wrapper pt-30">
	<div class="row align-items-center">
		<div class="col-md-6">
			<div class="titlemb-30">
				<h2>Tanggapan Pengaduan</h2>
			</div>
		</div>
		<!-- end col -->
		<div class="col-md-6">
			<div class="breadcrumb-wrapper mb-30">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item" aria-current="page">
							<a href="<?= base_url('/aduan'); ?>">Aduan Masyarakat</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">
							Tanggapan Pengaduan
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
			<form action="<?= base_url('/aduan/' . $data['aduan']['id']); ?>" method="post">
				<div class="input-style-1">
					<input type="hidden" name="_method" value="PUT">
					
					<label for="tanggapan" class="mt-3">Tanggapan</label>
					<textarea name="tanggapan" id="tanggapan" rows="8" value="<?= old('tanggapan'); ?>" class="form-control <?php if(session('errors.tanggapan')) : ?>is-invalid<?php endif ?>" placeholder="Tanggapan Petugas"></textarea>
					<div class="invalid-feedback">
						<?= session('errors.tanggapan') ?>
					</div>

					<button type="submit" class="main-btn success-btn btn-hover float-end mt-3">Selesai</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>