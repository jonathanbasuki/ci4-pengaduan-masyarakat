<?= $this->extend('templates/base_dashboard'); ?>
<?= $this->section('content'); ?>

<div class="title-wrapper pt-30">
	<div class="row align-items-center">
		<div class="col-md-6">
			<div class="titlemb-30">
				<h2>Buat Laporan Aduan</h2>
			</div>
		</div>
		<!-- end col -->
		<div class="col-md-6">
			<div class="breadcrumb-wrapper mb-30">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item" aria-current="page">
							<a href="<?= base_url('/petugas'); ?>">Dashboard</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">
							Buat Aduan 
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
			<form action="<?= base_url('/aduan'); ?>" method="post" enctype="multipart/form-data">
				<div class="input-style-1">
					<label for="foto">Foto</label>
					<input type="file" name="foto" id="foto" placeholder="Email" class="form-control <?php if(session('errors.foto')) : ?>is-invalid<?php endif ?>" onchange="showPreview(event)" />
					<div class="invalid-feedback">
						<?= session('errors.foto') ?>
					</div>
					<div class="preview mt-2">
						<small id="info" style="display: none;">Foto yang Anda pilih:</small> 
						<img class="mt-1" id="preview" width="180px" style="display: none;">
					</div>

					<label for="laporan" class="mt-3">Laporan</label>
					<textarea name="laporan" id="laporan" cols="10" rows="5" placeholder="Laporan Anda" class="form-control <?php if(session('errors.laporan')) : ?>is-invalid<?php endif ?>"><?= old('laporan'); ?></textarea>
					<div class="invalid-feedback">
						<?= session('errors.laporan') ?>
					</div>

					<button type="submit" class="main-btn primary-btn btn-hover float-end mt-3">Lapor</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	function showPreview(event)
	{
		if (event.target.files.length > 0) {
			let src = URL.createObjectURL(event.target.files[0]);
			let preview = document.getElementById('preview');
			let previewInfo = document.getElementById('info');

			preview.src = src;
			previewInfo.style.display = 'block';
			preview.style.display = 'block';
		}
	}
</script>

<?= $this->endSection(); ?>