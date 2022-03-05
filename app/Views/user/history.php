<?= $this->extend('templates/base_dashboard'); ?>
<?= $this->section('content'); ?>

<div class="title-wrapper pt-30">
	<div class="row align-items-center">
		<div class="col-md-6">
			<div class="title mb-30">
				<h2>Riwayat Aduan Saya</h2>
			</div>
		</div>
		<!-- end col -->
		<div class="col-md-6">
			<div class="breadcrumb-wrapper mb-30">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item" aria-current="page">
							<a href="<?= base_url('/dashboard'); ?>">Dashboard</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">
							Riwayat Aduan
						</li>
					</ol>
				</nav>
			</div>
		</div>
		<!-- end col -->
	</div>
	<!-- end row -->
</div>

<div class="tables-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<?= view('templates/_partials/_message'); ?>

			<div class="card-style mb-30">
				<div class="table-wrapper table-responsive">
					<?php if (count($data['aduan']) == 0): ?>
						<div class="alert-box primary-alert">
							<div class="alert">
								<p class="text-medium">
									Belum ada riwayat aduan.
								</p>
							</div>
						</div>
					<?php endif; ?>

					<?php if (count($data['aduan']) > 0): ?>
						<table class="table">
							<thead>
								<tr>
									<th><h6>Foto</h6></th>
									<th><h6>Tanggal</h6></th>
									<th><h6>Laporan</h6></th>
									<th><h6>Tanggapan</h6></th>
									<th><h6>Status</h6></th>
								</tr>
								<!-- end table row-->
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($data['aduan'] as $row): ?>
									<tr>
										<td>
											<img src="<?= base_url('/uploads/' . $row['foto']); ?>" alt="Foto Laporan" width="180px">
										</td>
										<td>
											<p><?= $row['tanggal']; ?></p>
										</td>
										<td>
											<p><?= $row['laporan']; ?></p>
										</td>
										<td>
											<p><?= $row['tanggapan']; ?></p>
										</td>
										<td>
											<span class="status-btn success-btn"><?= $row['status']; ?></span>
										</td>
									</tr>
								<?php endforeach; ?>
								<!-- end table row -->
							</tbody>
						</table>
						<!-- end table -->
					<?php endif; ?>
				</div>
			</div>
			<!-- end card -->
		</div>
		<!-- end col -->
	</div>
	<!-- end row -->
</div>

<?= $this->endSection(); ?>