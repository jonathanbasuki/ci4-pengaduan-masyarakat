<?= $this->extend('templates/base_dashboard'); ?>
<?= $this->section('content'); ?>

<div class="title-wrapper pt-30">
	<div class="row align-items-center">
		<div class="col-md-6">
			<div class="titlemb-30">
				<h2>Ubah Laporan Aduan</h2>
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
							Ubah Aduan 
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
			<form action="<?= base_url('/aduan/' . $data['aduan']['id']); ?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="old_file" value="<?= $data['aduan']['foto']; ?>">

				<div class="input-style-1">
					<label for="foto">Foto</label>
					<div class="row">
						<div class="col-md-3 preview mt-2">
							<img src="<?= base_url('/uploads/' . $data['aduan']['foto']); ?>" class="mt-1" id="preview" width="200">
						</div>
						<div class="col-md-9">
							<input type="file" name="foto" id="foto" class="form-control <?php if(session('errors.foto')) : ?>is-invalid<?php endif ?>" onchange="showPreview(event)" />
							<div class="invalid-feedback">
								<?= session('errors.foto') ?>
							</div>
						</div>
					</div>

					<label for="laporan" class="mt-3">Laporan</label>
					<textarea name="laporan" id="laporan" cols="10" rows="5" placeholder="Laporan Anda" class="form-control <?php if(session('errors.laporan')) : ?>is-invalid<?php endif ?>"><?= $data['aduan']['laporan']; ?></textarea>
					<div class="invalid-feedback">
						<?= session('errors.laporan') ?>
					</div>

					<button type="submit" class="main-btn primary-btn btn-hover float-end mt-3">Simpan Perubahan</button>
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

			preview.src = src;
		}
	}
</script>

<?= $this->endSection(); ?>