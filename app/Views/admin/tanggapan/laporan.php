<?= $this->extend('templates/base_dashboard'); ?>
<?= $this->section('content'); ?>

<div class="title-wrapper pt-30">
	<div class="row align-items-center">
		<div class="col-md-6">
			<div class="title mb-30">
				<h2>Laporan Kerja</h2>
			</div>
		</div>
		<!-- end col -->
		<div class="col-md-6">
			<div class="breadcrumb-wrapper mb-30">
				<button id="print-toggle" class="main-btn primary-btn btn-hover"
				><i class="lni lni-printer"></i> Print</button>
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
					<table class="table">
						<thead>
							<?php if (count($data['aduan']) > 0): ?>
								<tr>
									<th><h6>Foto</h6></th>
									<th><h6>Tanggal</h6></th>
									<th><h6>Laporan</h6></th>
									<th><h6>Tanggapan</h6></th>
									<th><h6>Status</h6></th>
								</tr>
							<?php endif; ?>
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
				</div>
			</div>
			<!-- end card -->
		</div>
		<!-- end col -->
	</div>
	<!-- end row -->
</div>

<script>
	const sidebarNavWrapper = document.querySelector(".sidebar-nav-wrapper");
	const overlay = document.querySelector(".overlay");
	const mainWrapper = document.querySelector(".main-wrapper");
	const printToggleButton = document.querySelector("#print-toggle");
	const menuToggleButtonIcon = document.querySelector("#menu-toggle i");

	printToggleButton.addEventListener("click", () => {
		sidebarNavWrapper.classList.add("active");
		overlay.classList.add("active");
		mainWrapper.classList.add("active");

		if (document.body.clientWidth > 1200) {
			if (menuToggleButtonIcon.classList.contains("lni-chevron-left")) {
				menuToggleButtonIcon.classList.remove("lni-chevron-left");
				menuToggleButtonIcon.classList.add("lni-menu");
			} 
		} else {
			if (menuToggleButtonIcon.classList.contains("lni-chevron-left")) {
				menuToggleButtonIcon.classList.remove("lni-chevron-left");
				menuToggleButtonIcon.classList.add("lni-menu");
			}
		}

		print();
	});
</script>

<?= $this->endSection(); ?>