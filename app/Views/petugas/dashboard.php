<?= $this->extend('templates/base_dashboard'); ?>
<?= $this->section('content'); ?>

<div class="title-wrapper pt-30">
	<div class="row align-items-center">
		<div class="col-md-6">
			<div class="titlemb-30">
				<h2>Dashboard Petugas</h2>
			</div>
		</div>
		<!-- end col -->
		<div class="col-md-6">
			<div class="breadcrumb-wrapper mb-30">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page">
							Dashboard
						</li>
					</ol>
				</nav>
			</div>
		</div>
		<!-- end col -->
	</div>
	<!-- end row -->
</div>

<div class="row">
	<div class="col-12">
		<?php if (session()->has('success')) : ?>
		<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
			<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
				<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
			</symbol>
		</svg>

		<div class="alert-box success-alert">
			<div class="alert alert-dismissible fade show" role="alert">
				<p class="text-medium">
					<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
					<?= session('success') . ' ' . user()->username . '!' ?>
				</p>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
	<?php endif ?>

	<div class="alert-box primary-alert">
		<div class="alert">
			<h4 class="alert-heading">
				<?php
				date_default_timezone_set('Asia/Jakarta');;
				$time = date("H");

				if ($time < "11") {
					echo "Selamat pagi, " . user()->username . '.';
				} else if ($time >= "11" && $time < "15") {
					echo "Selamat siang, " . user()->username . '.';
				} else if ($time >= "15" && $time <= "18") {
					echo "Selamat sore, " . user()->username . '.';
				} else if ($time > "18") {
					echo "Selamat malam, " . user()->username . '.';
				}
				?>
			</h4>
			<p class="text-medium">
				<?php if (count($data['aduan']) > 0): ?>
					Kami punya <a href="<?= base_url('/aduan'); ?>" style="text-decoration: underline;"><?= count($data['aduan']); ?> aduan masyarakat</a> yang belum selesai.
				<?php endif; ?>
				<?php if (count($data['aduan']) == 0): ?>
					Kami belum punya aduan dari masyarakat.
				<?php endif; ?>
			</p>
		</div>
	</div>
</div>
</div>

<?= $this->endSection(); ?>